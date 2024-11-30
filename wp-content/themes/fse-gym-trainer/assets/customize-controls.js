( function( api ) {

	// Extends our custom "fse-gym-trainer" section.
	api.sectionConstructor['fse-gym-trainer'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );