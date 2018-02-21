<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example: Browsing Files</title>
    <script>
        // Helper function to get parameters from the query string.
        function getUrlParam( paramName ) {
            var reParam = new RegExp( '(?:[\?&]|&)' + paramName + '=([^&]+)', 'i' );
            var match = window.location.search.match( reParam );

            return ( match && match.length > 1 ) ? match[1] : null;
        }
        // Simulate user action of selecting a file to be returned to CKEditor.
        function returnFileUrl() {

            var funcNum = getUrlParam( 'CKEditorFuncNum' );
            var fileUrl = '/path/to/file.txt';
            window.opener.CKEDITOR.tools.callFunction( funcNum, fileUrl );
            window.close();
        }
    </script>
</meta></head>
<body>
    <button onclick="returnFileUrl()">Select File</button>
</body>

<div class="form-group">
<textarea id="text" class="form-control ckeditor">Lorem ipsum</textarea>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
<script>
    $( document ).ready(function() {
        CKEDITOR.replace( 'text', {
            filebrowserBrowseUrl : '/elfinder/ckeditor',
            filebrowserImageBrowseUrl : '/elfinder/ckeditor',
            uiColor : '#9AB8F3',
            height : 300
        } );
    });
</script>
</html>