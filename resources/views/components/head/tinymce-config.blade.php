<div>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#text', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table ',
            menu: {
                file: {
                    title: 'File',
                    items: 'newdocument restoredraft | preview | export print | deleteallconversations'
                },
                edit: {
                    title: 'Edit',
                    items: 'undo redo | cut copy paste pastetext | selectall | searchreplace'
                },
                view: {
                    title: 'View',
                    items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen | showcomments'
                },
                insert: {
                    title: 'Insert',
                    items: 'image link media addcomment pageembed template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor tableofcontents | insertdatetime'
                },
                format: {
                    title: 'Format',
                    items: 'bold italic underline strikethrough superscript subscript codeformat | styles blocks fontfamily fontsize align lineheight | forecolor backcolor | language | removeformat'
                },
                tools: {
                    title: 'Tools',
                    items: 'spellchecker spellcheckerlanguage | a11ycheck code wordcount'
                },
                table: {
                    title: 'Table',
                    items: 'inserttable | cell row column | advtablesort | tableprops deletetable'
                },
                help: {
                    title: 'Help',
                    items: 'help'
                }
            },
            language: 'fr_FR',
            plugins: [
                'advlist',
                'anchor',
                'autolink',
                'autosave',
                'charmap',
                'emoticons',
                'fullscreen',
                'help',
                'image',
                'link',
                'lists',
                'media',
                'preview',
                'quickbars',
                'searchreplace',
                'table',
                'visualchars',
                'wordcount',
            ],
            autosave_ask_before_unload: true,
            autosave_restore_when_empty: true,
            link_default_protocol: 'https',
            link_assume_external_targets: 'https',
            quickbars_image_toolbar: false,
            quickbars_insert_toolbar: false,
        });
    </script>
</div>
