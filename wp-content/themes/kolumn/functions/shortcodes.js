(function() {
    tinymce.PluginManager.add( 'buttons', function( editor, url ) {
        editor.addButton( 'pulled', {
            icon: 'pulled',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'Add pulled blockquote',
                    body: [
                        {
                            type: 'listbox',
                            name: 'align',
                            label: 'Align',
                            values: [
                                { text: 'Right', value: 'right' },
                                { text: 'Left', value: 'left' }
                            ]
                        },
                        {
                            type: 'textbox',
                            name: 'text',
                            label: 'Text'
                        }
                    ],
                    onsubmit: function( e ) {
                        editor.insertContent(
                            '[pulled align="' + e.data.align + '"]' + e.data.text + '[/pulled]'
                        );
                    }
                });
            }
        });

        editor.addButton( 'infobox', {
            icon: 'infobox',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'Add infobox',
                    body: [
                        {
                            type: 'listbox',
                            name: 'color',
                            label: 'Color',
                            values: [
                                { text: 'Accent color', value: 'accent' },
                                { text: 'Red', value: 'red' },
                                { text: 'Green', value: 'green' },
                                { text: 'Orange', value: 'orange' },
                                { text: 'Dark grey', value: 'dark-grey' },
                                { text: 'Light grey', value: 'light-grey' }
                            ]
                        },
                        {
                            type: 'textbox',
                            name: 'text',
                            label: 'Text'
                        }
                    ],
                    onsubmit: function( e ) {
                        editor.insertContent(
                            '[infobox align="' + e.data.color + '"]' + e.data.text + '[/infobox]'
                        );
                    }
                });
            }
        });

        editor.addButton( 'btn', {
            icon: 'btn',
            onclick: function() {
                editor.windowManager.open( {
                    title: 'Add button',
                    body: [
                        {
                            type: 'listbox',
                            name: 'color',
                            label: 'Color',
                            values: [
                                { text: 'Accent color', value: 'accent' },
                                { text: 'Red', value: 'red' },
                                { text: 'Green', value: 'green' },
                                { text: 'Orange', value: 'orange' },
                                { text: 'Dark grey', value: 'dark-grey' },
                                { text: 'Light grey', value: 'light-grey' }
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'size',
                            label: 'Size',
                            values: [
                                { text: 'Regular', value: 'regular' },
                                { text: 'Big', value: 'big' },
                                { text: 'Small', value: 'small' },
                                { text: 'Tiny', value: 'tiny' }
                            ]
                        },
                        {
                            type: 'textbox',
                            name: 'url',
                            label: 'URL'
                        },
                        {
                            type: 'textbox',
                            name: 'text',
                            label: 'Text'
                        }
                    ],
                    onsubmit: function( e ) {
                        editor.insertContent(
                            '[btn size="' + e.data.size + '" color="' + e.data.color + '" url="' + e.data.url + '"]' + e.data.text + '[/btn]'
                        );
                    }
                });
            }
        });
    });
})();
