( function( wp ) {
    var el = wp.element.createElement;
    var registerBlockType = wp.blocks.registerBlockType;
    var TextControl = wp.components.TextControl;
    var RichText = wp.blockEditor.RichText
   
  //  var RichText = wp.editor.RichText
  var datepicker = wp.datepicker;

	/**
	 * Retrieves the translation of text.
	 * @see https://github.com/WordPress/gutenberg/tree/master/i18n#api
	 */
	var __ = wp.i18n.__;

    /**
     * Register meta block for calendar copy
     */
    registerBlockType( 'data-structure-meta/meta-block', {

		title: __( 'Data Structures', 'data_structure_meta' ),
        icon: 'tag',
		category: 'data-structure',

        attributes: {
            locationName: {
               	type: 'string',
				source: 'meta',
				meta : 'location_name',
            },
            locationDescription: {
                type: 'string',
                source: 'meta',
                meta : 'location_description',
            },
            dataStructureType: {
                type: 'string',
                source: 'meta',
                meta : 'data_structure_type'
            },
            hiddenJson: {
				type: 'array',
				source: 'children',
				selector: '.hiddenJson',
				key: 'hiddenJsonKey'
			}
		},

        edit: function( props ) {
            var className = props.className;
            var setAttributes = props.setAttributes;

            function updateLocationName( locationName ) {
                setAttributes( locationName );
            }
            function updateLocationDescription( locationDescription ) {
                setAttributes( locationDescription );
            }
            function updateDataStructureType( dataStructureType ) {
                setAttributes( dataStructureType );
            }

            return el(
                'div',
                { className: className },
                el( TextControl, {
                    label: 'Location Name ',
                    value: props.attributes.locationName,
                    key: 'locationName',
                    className: 'data-structure-text-input',
                    onChange: function( value ) {
                        setAttributes( { locationName: value } );
                    }
                } ),
                el( TextControl, {
                    label: 'Location Description ',
                    value: props.attributes.locationDescription,
                    key: 'locationDescription',
                    className: 'data-structure-text-input',
                    onChange: function( value ) {
                        setAttributes( { locationDescription: value } );
                    }
                } ),
                el( TextControl, {
                    label: '',
                    type: 'hidden',
                    value: props.attributes.dataStructureType,
                    key: 'dataStructureTypeKey',
                    className: 'data-structure-text-input-recipe',
                    onChange: function( value ) {
                        setAttributes( { dataStructureType: value } );
                    }
                } ),
                el(RichText, {
                    key: 'hiddenJsonKey',
                    tagName: 'p',
                    keepplaceholderonfocus: 'true',
                    value: props.attributes.hiddenJson, // adding a p tag with hiddenJson class in order to see that data structure block was used therefore add data-structure as json-ld to head
                    className: 'hiddenJson'
                })
                
            );
        },

        // No information saved to the block
        // Data is saved to post meta via attributes
        save: function(props) {
            var attributes = props.attributes;
           // return null;
            return (
                el(RichText.Content, {
                    tagName: 'p',
                    className: 'hiddenJson',
                    value: attributes.hiddenJson
                })
            )
        }
	} );

	 /**
     * Register meta block for event date
     */
    /*
    registerBlockType( 'event-post-date/meta-block', {

		title: __( 'Event Date', 'event_post_date' ),
        icon: 'tag',
		category: 'event-blocks',

        attributes: {
            blockValue: {
               	type: 'string',
				source: 'meta',
				meta : 'event_post_date',
			//	id :  'jquery-datepicker' ,
			//	class: 'hasDatepicker',
            }
		},

        edit: function( props ) {
            var className = props.className;
            var setAttributes = props.setAttributes;

            function updateBlockValue( blockValue ) {
                setAttributes({ blockValue });
            }

            return el(
                'div',
                { className:  className },
                el( TextControl, {
					id: 'datepicker',
					label: 'Event Date',
					type: 'date',
                    value: props.attributes.blockValue,
                    onChange: updateBlockValue
                } )
            );
        },

        // No information saved to the block
        // Data is saved to post meta via attributes
        save: function() {
            return null;
        }
	} );

	 /**
     * Register meta block for event start time
     */
    /*
    registerBlockType( 'event-post-time/meta-block', {

		title: __( 'Event Start Time', 'event_post_time' ),
        icon: 'tag',
		category: 'event-blocks',

        attributes: {
            blockValue: {
               	type: 'string',
				source: 'meta',
				meta : 'event_post_time',

            }
		},

        edit: function( props ) {
            var className = props.className;
            var setAttributes = props.setAttributes;

            function updateBlockValue( blockValue ) {
                setAttributes({ blockValue });
            }

            return el(
                'div',
                { className: className },
                el( TextControl, {
					label: 'Event Start Time',
					type: 'time',
                    value: props.attributes.blockValue,
                    onChange: updateBlockValue
                } )
            );
        },

        // No information saved to the block
        // Data is saved to post meta via attributes
        save: function() {
            return null;
        }
	} );
	/**
     * Register meta block for event end time
     */
    /*
    registerBlockType( 'event-post-end-time/meta-block', {

		title: __( 'Event End Time', 'event_post_end_time' ),
        icon: 'tag',
		category: 'event-blocks',

        attributes: {
            blockValue: {
               	type: 'string',
				source: 'meta',
				meta : 'event_post_end_time',

            }
		},

        edit: function( props ) {
            var className = props.className;
            var setAttributes = props.setAttributes;

            function updateBlockValue( blockValue ) {
                setAttributes({ blockValue });
            }

            return el(
                'div',
                { className: className },
                el( TextControl, {
					label: 'Event End Time',
					type: 'time',
                    value: props.attributes.blockValue,
                    onChange: updateBlockValue
                } )
            );
        },

        // No information saved to the block
        // Data is saved to post meta via attributes
        save: function() {
            return null;
        }
	} );

	 /**
     * Register meta block for location
     */
	/*
    registerBlockType( 'event-post-location/meta-block', {

		title: __( 'Event Location', 'event_post_location' ),
        icon: 'tag',
		category: 'event-blocks',

        attributes: {
            blockValue: {
               	type: 'string',
				source: 'meta',
				meta : 'event_post_location',
            }
		},

        edit: function( props ) {
            var className = props.className;
            var setAttributes = props.setAttributes;

            function updateBlockValue( blockValue ) {
                setAttributes({ blockValue });
            }

            return el(
                'div',
                { className: className },
                el( TextControl, {
                    label: 'Location of Event',
                    value: props.attributes.blockValue,
                    onChange: updateBlockValue
                } )
            );
        },

        // No information saved to the block
        // Data is saved to post meta via attributes
        save: function() {
            return null;
        }
	} );
	*/
	 /**
     * register meta block for usda plant database link
     */
	/*
	registerBlockType ('event-post-copy/meta-block', {
		title: __('Calendar Copy', 'event_post_copy'),
		icon: 'tag',
		category: 'common',

		attributes: {
		  blockValue: {
			type: 'array',
			source: 'meta',
			meta: 'event_post_copy',
			selector: 'p',
		  },
		},

		edit: function (props) {
		  var className = props.className;
		  var setAttributes = props.setAttributes;

		  function updateBlockValue (blockValue) {
			setAttributes ({blockValue});
		  }
		  return el (
			'div',
			{className: className},
			el ('h3', {}, __ ('Calendar Copy: ')),
			el (RichText, {
			  key: 'editable',
			  tagName: 'p',
			  label: 'Calendar Copy',
			  placeholder: __ ('Add calendar copy...'),
			  value: props.attributes.blockValue,
			  onChange: updateBlockValue,
			})
		  );
		},

		// No information saved to the block
		// Data is saved to post meta via attributes
		save: function () {
		  return null;
		},
	  });
*/


} )( window.wp );
