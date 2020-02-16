tinymce.init({ 
  selector: 'textarea#body',
  plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',          
  images_upload_handler: function (blobInfo, success, failure) {
      var xhr, formData;
      xhr = new XMLHttpRequest();
      xhr.withCredentials = false;
      xhr.open('POST', "{{asset('images/upload')}}");
      var token = '{{ csrf_token() }}';
      xhr.setRequestHeader("X-CSRF-Token", token);
      xhr.onload = function() {
          var json;
          if (xhr.status != 200) {
              failure('HTTP Error: ' + xhr.status);
              return;
          }
          json = JSON.parse(xhr.responseText);

          if (!json || typeof json.location != 'string') {
              failure('Invalid JSON: ' + xhr.responseText);
              return;
          }
          success(json.location);
      };
      formData = new FormData();
      formData.append('file', blobInfo.blob(), blobInfo.filename());
      xhr.send(formData);
  }
});


{/* <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<textarea name="content" class="form-control my-editor">{!! old('content', $content) !!}</textarea>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script> */}
  

// tinymce.init({
//   selector: 'textarea#body',
//   plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
//   imagetools_cors_hosts: ['picsum.photos'],
//   menubar: 'file edit view insert format tools table help',
//   toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
//   toolbar_sticky: true,
//   autosave_ask_before_unload: true,
//   autosave_interval: "30s",
//   autosave_prefix: "{path}{query}-{id}-",
//   autosave_restore_when_empty: false,
//   autosave_retention: "2m",
//   image_advtab: true,
//   content_css: [
//     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
//     '//www.tiny.cloud/css/codepen.min.css'
//   ],
//   link_list: [
//     { title: 'My page 1', value: 'http://www.tinymce.com' },
//     { title: 'My page 2', value: 'http://www.moxiecode.com' }
//   ],
//   image_list: [
//     { title: 'My page 1', value: 'http://www.tinymce.com' },
//     { title: 'My page 2', value: 'http://www.moxiecode.com' }
//   ],
//   image_class_list: [
//     { title: 'None', value: '' },
//     { title: 'Some class', value: 'class-name' }
//   ],
//   importcss_append: true,
//   height: 400,
//   file_picker_callback: function (callback, value, meta) {
//     /* Provide file and text for the link dialog */
//     if (meta.filetype === 'file') {
//       callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
//     }

//     /* Provide image and alt text for the image dialog */
//     if (meta.filetype === 'image') {
//       callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
//     }

//     /* Provide alternative source and posted for the media dialog */
//     if (meta.filetype === 'media') {
//       callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
//     }
//   },
//   templates: [
//         { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
//     { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
//     { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
//   ],
//   template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
//   template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
//   height: 600,
//   image_caption: true,
//   quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
//   noneditable_noneditable_class: "mceNonEditable",
//   toolbar_drawer: 'sliding',
//   contextmenu: "link image imagetools table",
//  });

