class PageFilter {

	constructor(options) {
		this.$form = options.form;
	    this.$results = options.results;
	    this.afterRequest = options.afterRequest || function(){};

	    this.base = this.$form.attr('action');
	    this.$request = false;
        

	    this.$form.on('submit', (e) => {
	    	e.preventDefault();

    		if(options.onSubmit) {
    			options.onSubmit();
    		}
    		else {
    			this.submit();
    		}
	    	
	    	return false;
	    });

	    this.$form.on('change', (e) => {
            if(e.target.name != 'kinderen[]' && e.target.name != 'personen'){
              this.$form.submit();
            }
        });

	    var $dest_checks = $('.regions-filter input[type=checkbox]', this.$form);
	    $dest_checks.change(function(e){
	    	var el = $(this);
	    	$('.filters-' + el.val()).toggleClass('hidden');
	    });

        $('.save-button').on('click', (e) => {
            this.$form.submit();
        })

	    
	    if(window.history) {
	    	this.setupHistory();
	    }
	    
	}

	submit() {
		var params = this.getParams();
       
		this.request(params);

		
		if(window.history) {
			this.pushHistory(params);
		}
		
	}

	getParams() {
		var params = this.$form.serializeArray().filter(function(param) {
           return param.value && param.value != 0;
        });
		return params;
	}

	buildUrl(params) {

		return this.base + '?' + this.$form.serialize();

        /*
        var filters = {};
        
        params = params.filter(function(param){
           return param.name != 'kinderen' && param.name != 'personen' && param.name != 'van' && param.name != 'tot';
        });

        for(var i in params) {
            var param = params[i];
            var name = param.name.replace('[]','');

            if(typeof filters[name] != 'undefined') {
                //if we alread have a filter with same same, append the value
                filters[name].value += ',' + param.value;
            }
            else {
                filters[name] = {value: param.value, name: name};
            }
        }
        
        var url = '';
        for(var i in filters) {
            url += filters[i].name + '/' + filters[i].value + '/';
        }
        return this.base + url;

        */
    }

	request(params) {
		this.$form.addClass('loading');
		//this.$results.html('');

		//Don't execute if there is already one ajax running
		if(this.$request) {
			this.$request.abort();
		}

		this.$request = $.ajax({
		    'url': this.$form.attr('action') + '?a=1',
		    'method': 'get',
		    'data': params
		}).done(( html ) => {
		    this.$results.html( html );
		    this.$form.removeClass('loading');
		    this.afterRequest();
		});
		

		if(window.history){
			window.history.replaceState({ params: params }, '', this.buildUrl(params));
		}
	}

	setupHistory() {
        
		var params = this.getParams();

		window.addEventListener('popstate', (e) => { 
			this.popHistory(e) 
		});

        window.history.replaceState({ params: params }, '', window.location);
	}
	popHistory(e) {
        
		if(e.state) {
		    var params = e.state.params || [];
		    request(params);
		}
	}

	pushHistory(params) {
		var url = this.buildUrl(params);
    	window.history.pushState({ params: params }, '', url);
	}
}

module.exports = PageFilter;