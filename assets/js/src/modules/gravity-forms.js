// replace form required asterisks with lock icons (replace with icon of choice)
$('.gform_wrapper .gfield_required').each( function() {
    $(this).html('<i class="fas fa-lock"></i>');
});


// insert dropdown icons to gform select elements
$('.gform_wrapper .ginput_container_select').each( function() {
    $(this).append('<div class="field_icon"><i class="fas fa-sort"></i></div>');
});


// insert datepicker icons to gform select elements
$('.gform_wrapper .ginput_container_date').each( function() {
    $(this).append('<div class="field_icon"><i class="far fa-calendar-alt"></i></div>');
});


// insert error icons to gform field error elements
$('.gform_wrapper .gfield.gfield_error .ginput_container:not(.ginput_container_checkbox):not(.ginput_container_radio):not(.ginput_container_select)').each( function() {
    $(this).append('<div class="error_icon"><i class="far fa-times"></i></div>');
});


// add loader and disabled class to gform submits to prevent multiple submits
$('.gform_wrapper form').submit( function(e) {
    let $submit = $(this).closest('.gform_wrapper').find('.gform_footer *[type="submit"]');

    if( !$submit.hasClass('btn-disabled') ) {
        $submit.addClass('btn-disabled').prepend('<i class="icon-left fas fa-spinner fa-spin"></i>').blur();
    } else {
        e.preventDefault();
    }
});


// hide .gform_heading if .gform_description is only child and is empty
$('.gform_wrapper .gform_heading .gform_description').each( function() {
    let $heading = $(this).closest('.gform_heading');
    let $description = $(this);

    // if description is empty, hide it
    if( $description.html() === '' ) {
        $description.hide();

        // if description is empty, and only child, hide heading
        if( $description.siblings().size() === 0 ) {
            $heading.hide();
        }
    }
});
