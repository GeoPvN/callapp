// JavaScript Document
(function () {
    tinymce.create('tinymce.plugins.tcsnshortcodes', {
        /**
         * Initializes the plugin, this will be executed after the plugin has been created.
         * This call is done before the editor instance has finished it's initialization so use the onInit event
         * of the editor instance to intercept that event.
         *
         * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
         * @param {string} url Absolute URL to where the plugin is located.
         */
        init: function (ed, url) {

            // Register the command for buttons
            ed.addCommand('tcsnbuttons', function () {
                ed.windowManager.open({
                    file: url + '/button-shortcode-popup.php', // file that contains HTML for modal window
                    width: 500, // size of window
                    height: 400, // size of window
                    inline: 1
                });
            }),
			
			// Register the command for icons
            ed.addCommand('tcsnicons', function () {
                ed.windowManager.open({
                    file: url + '/icon-shortcode-popup.php', // file that contains HTML for modal window
                    width: 500, // size of window
                    height: 400, // size of window
                    inline: 1
                });
            }),
           	
			// Register button for button
            ed.addButton('tcsnbuttons', {
                title: 'Button',
                cmd: 'tcsnbuttons',
                image: url + '/images/icon-sc-btn.png'
            }); 

			// Register button for icons
            ed.addButton('tcsnicons', {
                title: 'Bootstrap Icons',
                cmd: 'tcsnicons',
                image: url + '/images/icon-sc-icons.png'
            });
			
			
				// General
			ed.addButton('tcsngeneral', {
				type: 'listbox',
				text: 'General',
				fixedWidth: true,
				icon: false,
				onselect: function(e) {
            		ed.insertContent(this.value());
        		},
		    values: [
				{text: 'Feature with big Icon', value: '[feature_big_icon icon_url="" heading="Heading here"]Content here[/feature_big_icon]'},
				{text: 'Feature with big Glyphicon', value: '[feature_big_glyphicon icon_type="bookmark" icon_color="#000" heading="Heading here"]Content here[/feature_big_glyphicon]'},
				{text: 'Feature with small Icon', value: '[feature_small_icon icon_url="" heading="Heading here"]Content here[/feature_small_icon]'},
				{text: 'Feature with small Glyphicon', value: '[feature_small_glyphicon icon_type="bookmark" icon_color="#000" heading="Heading here"]Content here[/feature_small_glyphicon]'},
				{text: 'Person', value: '[person src="" name="" post="" twitter="" facebook="" skype="" linkedin="" mail="" link=""]Content here[/person]'},
				{text: 'Divider', value: '[divider style="e.g. crosslines,dotted,double-dotted"]'},
				{text: 'Vertical spacer / gap', value: '[spacer height="in px"]'},
				{text: 'List', value: '[list][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list]'},
				{text: 'List - Arrow', value: '[list_arrow][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_arrow]'},
				{text: 'List - Checkmark', value: '[list_checkmark][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_checkmark]'},
				{text: 'List - Ace', value: '[list_ace][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_ace]'},			
				{text: 'list - Unstyled', value: '[list_unstyled][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_unstyled]'},
				{text: 'List with heading to li', value: '[list_heading][list_item]<h3>1. First heading</h3>Content here[/list_item][list_item]<h3>2. Second heading</h3>Content here[/list_item][list_item]<h3>3. Third heading</h3>Content here[/list_item][/list_heading]'},
				{text: 'List - Vertical Pipe', value: '[list_separator][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_separator]'},
				{text: 'List - Inline', value: '[list_inline][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_inline]'},
				{text: 'Light Color Box', value: '[box style="light"]Content here[/box]'},
				{text: 'Dark Color Box', value: '[box style="dark"]Content here[/box]'},
				{text: 'Image with text on overlay', value: '[overlay_image src=""]Content here[/overlay_image]'},
				{text: 'Blockquote', value: '[blockquote]Content here[/blockquote]'},
				{text: 'Blockquote pulled to right', value: '[blockquote align="pull-right"]Content here[/blockquote]'},
				{text: 'tooltip', value: '[tooltip url="" title="Content inside tooltip" placement="e.g. top, bottom, left, right"]Link text[/tooltip]'},
				{text: 'Table', value: '[table strip="striped" border="bordered" compact="" hover="hover"][thead][tr][th]Heading one[/th][th]Heading two[/th][/tr][/thead][tbody][tr][td]One[/td][td]Two[/td][/tr][tr][td]Three[/td][td]Four[/td][/tr][/tbody][/table]'},
				{text: 'Pricing List', value: '[pricing_features][pricing_list_item] Feature one [/pricing_list_item][pricing_list_item] Feature two [/pricing_list_item][pricing_list_item] Feature three [/pricing_list_item][/pricing_features]'},
				
    		],
			
			//onPostRender: function() {
      // Select the second item by default
//    }
			});

			// Typography
			ed.addButton('tcsntypo', {
				type: 'listbox',
				text: 'Typography',
				fixedWidth: true,
				icon: false,
				onselect: function(e) {
            		ed.insertContent(this.value());
        		},
		    values: [
				{text: 'Heading with Icon', value: '[icon_heading icon_url=""]Heading here[/icon_heading]'},
				{text: 'Heading with Glyphicon', value: '[glyphicon_heading icon_type="bookmark" icon_color="#fff"]Heading here[/glyphicon_heading]'},
				{text: 'Text Color', value: '[text_color color="e.g. #000 or green, leave blank for theme default"]Content here[/text_color]'},
				{text: 'Highlight', value: '[highlight bgcolor="e.g. #000 or green" color="e.g. #fff or green"]Content here[/highlight]'},
				{text: 'Dropcap', value: '[dropcap size="40px" color="e.g. #000 or green"]T[/dropcap]'},

    		],
			//onPostRender: function() {
      // Select the second item by default
//    }
			});
			
			// Media
			ed.addButton('tcsnmedia', {
				type: 'listbox',
				text: 'Media SC',
				fixedWidth: true,
				icon: false,
				onselect: function(e) {
            		ed.insertContent(this.value());
        		},
		    values: [
				{text: 'Image with Lightbox', value: '[image-item src="" alt="" large_img_link="" large_img_title=""]'},
				{text: 'Carousel Wrapper', value: '[carousel-wrapper][/carousel-wrapper]'},
				{text: 'Carousel Item', value: '[carousel-item src="" alt="" large_img_link="" large_img_title="" url=""]'},
			

    		],
			//onPostRender: function() {
      // Select the second item by default
//    }
			});
			
        },
		
        /**
         * Creates control instances based in the incoming name. This method is normally not
         * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
         * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
         * method can be used to create those.
         *
         * @param {String} n Name of the control to create.
         * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
         * @return {tinymce.ui.Control} New control instance or null if no control was created.
         */
        createControl : function(n, cm) {
              switch (n) {

			// Media Shortcodes
			case 'tcsnmedia':
                var mlb = cm.createListBox('tcsnmedia', {
                    title : 'Media SC',
                    onselect : function(v) {
                       tinyMCE.activeEditor.selection.setContent(v);
                     }
                });

                // Add some values to the list box
				mlb.add('Image with Lightbox', '[image-item src="" alt="" large_img_link="" large_img_title=""]');
				mlb.add('Carousel Wrapper', '[carousel-wrapper][/carousel-wrapper]');
				mlb.add('Carousel Item', '[carousel-item src="" alt="" large_img_link="" large_img_title="" url=""]');
								
				// Return the new listbox instance
            	return mlb;
				
			// Media Shortcodes
			case 'tcsntypo':
                var mlb = cm.createListBox('tcsntypo', {
                    title : 'Text Styles',
                    onselect : function(v) {
                       tinyMCE.activeEditor.selection.setContent(v);
                     }
                });

                // Add some values to the list box
				mlb.add('Heading with Icon', '[icon_heading icon_url=""]Heading here[/icon_heading]');
				mlb.add('Heading with Glyphicon', '[glyphicon_heading icon_type="bookmark" icon_color="#fff"]Heading here[/glyphicon_heading]');
				mlb.add('Text Color', '[text_color color="e.g. #000 or green, leave blank for theme default"]Content here[/text_color]');
				mlb.add('Highlight', '[highlight bgcolor="e.g. #000 or green" color="e.g. #fff or green"]Content here[/highlight]');
				mlb.add('Dropcap', '[dropcap size="40px" color="e.g. #000 or green"]T[/dropcap]');

				// Return the new listbox instance
            	return mlb;
				
			// General Shortcodes
			case 'tcsngeneral':
                var mlb = cm.createListBox('tcsngeneral', {
                    title : 'General SC',
                    onselect : function(v) {
                       tinyMCE.activeEditor.selection.setContent(v);
                     }
                });

                // Add some values to the list box
				mlb.add('Feature with big Icon', '[feature_big_icon icon_url="" heading="Heading here"]Content here[/feature_big_icon]');
				mlb.add('Feature with big Glyphicon', '[feature_big_glyphicon icon_type="bookmark" icon_color="#000" heading="Heading here"]Content here[/feature_big_glyphicon]');
				mlb.add('Feature with small Icon', '[feature_small_icon icon_url="" heading="Heading here"]Content here[/feature_small_icon]');
				mlb.add('Feature with small Glyphicon', '[feature_small_glyphicon icon_type="bookmark" icon_color="#000" heading="Heading here"]Content here[/feature_small_glyphicon]');
				mlb.add('Person', '[person src="" name="" post="" twitter="" facebook="" skype="" linkedin="" mail="" link=""]Content here[/person]');
				mlb.add('Divider', '[divider style="e.g. crosslines,dotted,double-dotted"]');
				mlb.add('Vertical spacer / gap', '[spacer height="in px"]');
				mlb.add('List', '[list][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list]');
				mlb.add('List - Checkmark', '[list_checkmark][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_checkmark]');
				mlb.add('List - Arrow', '[list_arrow][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_arrow]');
				mlb.add('List - Ace', '[list_ace][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_ace]');
				mlb.add('list - Unstyled', '[list_unstyled][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_unstyled]');
				mlb.add('List with heading to li', '[list_heading][list_item]<h3>1. First heading</h3>Content here[/list_item][list_item]<h3>2. Second heading</h3>Content here[/list_item][list_item]<h3>3. Third heading</h3>Content here[/list_item][/list_heading]');
				mlb.add('List - Vertical Pipe', '[list_separator][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_separator]');
				mlb.add('List - Inline', '[list_inline][list_item]List item one[/list_item][list_item]List item two[/list_item][list_item]List item three[/list_item][/list_inline]');
				mlb.add('Light Color Box', '[box style="light"]Content here[/box]');
				mlb.add('Dark Color Box', '[box style="dark"]Content here[/box]');
				mlb.add('Image with text on overlay', '[overlay_image src=""]Content here[/overlay_image]');
				mlb.add('Blockquote', '[blockquote]Content here[/blockquote]');
				mlb.add('Blockquote pulled to right', '[blockquote align="pull-right"]Content here[/blockquote]');
				mlb.add('tooltip', '[tooltip url="" title="Content inside tooltip" placement="e.g. top, bottom, left, right"]Link text[/tooltip]');
				mlb.add('Table', '[table strip="striped" border="bordered" compact="" hover="hover"][thead][tr][th]Heading one[/th][th]Heading two[/th][/tr][/thead][tbody][tr][td]One[/td][td]Two[/td][/tr][tr][td]Three[/td][td]Four[/td][/tr][/tbody][/table]');
				mlb.add('Pricing List', '[pricing_features]<br/>[pricing_list_item] Feature one [/pricing_list_item]<br/>[pricing_list_item] Feature two [/pricing_list_item]<br/>[pricing_list_item] Feature three [/pricing_list_item]<br/>[/pricing_features]');

				// Return the new listbox instance
            	return mlb;
        }
        return null;
        },
		
        /**
         * Returns information about the plugin as a name/value array.
         * The current keys are longname, author, authorurl, infourl and version.
         *
         * @return {Object} Name/value array containing information about the plugin.
         */
        getInfo: function () {
            return {
                longname: 'TCSN Shortcodes',
                author: 'Tansh',
                authorurl: 'http://tanshcreative.com',
                infourl: 'http://tanshcreative.com',
                version: tinymce.majorVersion + "." + tinymce.minorVersion
            };
        }
    });

    // Register plugin
    tinymce.PluginManager.add('tcsnshortcodes', tinymce.plugins.tcsnshortcodes);
})();