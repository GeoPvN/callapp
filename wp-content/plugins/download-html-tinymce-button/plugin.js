( function() {
    tinymce.PluginManager.add( 'download_html', function( editor, url ) {
		
		editor.addCommand('mceDownloadHtml', function() {
			var form = document.createElement("form");
			form.setAttribute('method',"post");
			form.setAttribute('action',"../wp-content/plugins/download-html-tinymce-button/download/download.php");
			form.setAttribute('style',"display: none;");

			var contentTextArea = document.createElement("textarea");
			contentTextArea.setAttribute('name',"content");
			contentTextArea.value = tinyMCE.activeEditor.getContent();
			
			var timezoneOffsetInput = document.createElement("input");
			timezoneOffsetInput.setAttribute('name',"timezone_offset");
			timezoneOffsetInput.setAttribute('type',"text");
			timezoneOffsetInput.setAttribute('value', new Date().getTimezoneOffset());

			var submitButton = document.createElement("input");
			submitButton.setAttribute('type',"submit");
			submitButton.setAttribute('value',"Submit");

			form.appendChild(contentTextArea);
			form.appendChild(timezoneOffsetInput);
			form.appendChild(submitButton);

			document.body.appendChild(form);

			form.submit();
		});

        editor.addButton( 'download_html', {
			title: 'Download HTML',
			cmd: 'mceDownloadHtml',
			icon: 'download'
        } );

		//editor.addShortcut('Ctrl+D', '', 'mcePrint');

		editor.addMenuItem('download_html', {
			text: 'Download HTML',
			cmd: 'mceDownloadHtml',
			icon: 'download',
			//shortcut: 'Ctrl+D',
			context: 'file'
		});

    } );

} )();