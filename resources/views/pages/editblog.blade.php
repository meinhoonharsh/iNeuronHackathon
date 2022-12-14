@extends('layouts.admin')

@section('content')
    <style>
        /* #crop-button,
                                                                            #preview_container {
                                                                                display: none;
                                                                            } */
    </style>
    <div class="container-fluid mt-3">

        <div class="row">

            <div class="col-lg-8 col-md-10 mx-auto mb-5">


                <h3>{{ $way }} Post</h3>
                <hr>
                <form enctype="multipart/form-data" name="sentMessage" id="contactForm"
                    action="@if ($way == 'Add') /addblog
                @else
                                        /edit/{{ $blog->id }} @endif "
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="main_image" value="" id="main_image" style="">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Title</label>
                            <input name="title" type="text" value="{{ $blog['title'] ?? '' }}" class="form-control"
                                placeholder="Title" id="title" required
                                data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Slug</label>
                            <input name="slug" value="{{ $blog['slug'] ?? '' }}" type="text" class="form-control"
                                placeholder="Slug" id="slug" required onkeyup="this.value=this.value.replace(' ','-')"
                                data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Read Time</label>
                            <input name="readtime" value="{{ $blog['readtime'] ?? '' }}" type="number" max="100"
                                class="form-control" placeholder="5" id="phone" required
                                data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Tags</label>
                            <input name="tags" value="{{ $blog['tags'] ?? '' }}" type="text" class="form-control"
                                placeholder="Technology" id="phone" required
                                data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Category</label>
                            <select name="category" required class="form-select form-select-lg"
                                aria-label=".form-select-lg example">
                                <option disabled>Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($blog['category'] ?? '' == $category['id']) selected @endif>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <div class="custom-control custom-switch">
                                <input name="active" type="checkbox" class="custom-control-input" id="customSwitch1"
                                    @if ($blog['active'] ?? '') checked @endif>
                                <label class="custom-control-label" for="customSwitch1">Active Status</label>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Content</label>
                            <textarea name="content" rows="25" class="form-control" placeholder="Content" id="editor"
                                data-validation-required-message="Please enter a message.">{{ $blog['content'] ?? 'Write here...' }}</textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>



                    <div>


                        <div class="">
                            <div id="preview-crop-image" style="">

                                <img src="{{ $blog->image ?? '' }}" style="width:100%" onerror="this.display='none'" />
                            </div>
                        </div>
                        <div class=" text-center" id="preview_container">
                            <div id="upload-demo"></div>
                        </div>
                        <div class="" style="padding:5%;">
                            <strong>Select image to crop:</strong>

                            <input type="file" name="" id="image">

                            <button class="btn btn-primary btn-block upload-image" id="crop-button" style="margin-top:2%"
                                type="button">Crop
                                Image</button>

                        </div>
                    </div>
























                    <script src="https://cdn.tiny.cloud/1/voorcxwhei9xokxcfmqg0v2pjebx0ztaskdrc2b61gicmxgy/tinymce/5/tinymce.min.js"
                        referrerpolicy="origin"></script>
                    <!-- Create the editor container -->
                    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script> --}}
                    <!-- include libraries(jQuery, bootstrap) -->
                    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}

                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

                    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
                    
                   
                   
                   
                    <!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
                    <link rel="stylesheet" type="text/css"
                        href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
                    <link rel="stylesheet" type="text/css"
                        href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
                    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
                    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
                    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script> --}}

                    <!-- include summernote css/js -->
                    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
                    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
                    <script>
                        var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
                        tinymce.init({
                            selector: '#editor',
                            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                            codesample_languages: [{
                                    text: 'Plain Text',
                                    value: 'plain'
                                },
                                {
                                    text: 'HTML/XML',
                                    value: 'markup'
                                },
                                {
                                    text: 'JavaScript',
                                    value: 'javascript'
                                },
                                {
                                    text: 'CSS',
                                    value: 'css'
                                },
                                {
                                    text: 'PHP',
                                    value: 'php'
                                },
                                {
                                    text: 'Ruby',
                                    value: 'ruby'
                                },
                                {
                                    text: 'Python',
                                    value: 'python'
                                },
                                {
                                    text: 'Java',
                                    value: 'java'
                                },
                                {
                                    text: 'C',
                                    value: 'c'
                                },
                                {
                                    text: 'C#',
                                    value: 'csharp'
                                },
                                {
                                    text: 'C++',
                                    value: 'cpp'
                                },
                                {
                                    text: 'Bash/Shell',
                                    value: 'bash'
                                },
                                {
                                    text: 'Nginx',
                                    value: 'nginx'
                                },
                                {
                                    text: 'SQL',
                                    value: 'sql'
                                },
                                {
                                    text: 'Dart/Flutter',
                                    value: 'dart'
                                },
                                {
                                    text: 'Yaml',
                                    value: 'yaml'
                                },
                                {
                                    text: 'XML',
                                    value: 'xml'
                                },
                                {
                                    text: 'JSON',
                                    value: 'json'
                                },
                                {
                                    text: 'Django/Jinja',
                                    value: 'django'
                                },
                                {
                                    text: 'Docker',
                                    value: 'docker'
                                },
                                {
                                    text: 'Git',
                                    value: 'git'
                                },
                                {
                                    text: 'Kotlin',
                                    value: 'kotlin'
                                },
                                {
                                    text: 'TypeScript',
                                    value: 'typescript'
                                },
                                {
                                    text: 'PowerShell',
                                    value: 'powershell'
                                },
                                {
                                    text: 'React JSX',
                                    value: 'jsx'
                                },
                                {
                                    text: 'Markdown',
                                    value: 'markdown'
                                },
                            ],
                            imagetools_cors_hosts: ['picsum.photos'],
                            menubar: 'file edit view insert format tools table help',
                            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                            toolbar_sticky: true,
                            autosave_ask_before_unload: true,
                            autosave_interval: '30s',
                            autosave_prefix: '{path}{query}-{id}-',
                            autosave_restore_when_empty: false,
                            autosave_retention: '2m',
                            image_advtab: true,
                            link_list: [{
                                    title: 'My page 1',
                                    value: 'https://www.tiny.cloud'
                                },
                                {
                                    title: 'My page 2',
                                    value: 'http://www.moxiecode.com'
                                }
                            ],
                            image_list: [{
                                    title: 'My page 1',
                                    value: 'https://www.tiny.cloud'
                                },
                                {
                                    title: 'My page 2',
                                    value: 'http://www.moxiecode.com'
                                }
                            ],
                            image_class_list: [{
                                    title: 'None',
                                    value: ''
                                },
                                {
                                    title: 'Some class',
                                    value: 'class-name'
                                }
                            ],
                            importcss_append: true,
                            file_picker_callback: function(callback, value, meta) {
                                /* Provide file and text for the link dialog */
                                if (meta.filetype === 'file') {
                                    callback('https://www.google.com/logos/google.jpg', {
                                        text: 'My text'
                                    });
                                }

                                /* Provide image and alt text for the image dialog */
                                if (meta.filetype === 'image') {
                                    callback('https://www.google.com/logos/google.jpg', {
                                        alt: 'My alt text'
                                    });
                                }

                                /* Provide alternative source and posted for the media dialog */
                                if (meta.filetype === 'media') {
                                    callback('movie.mp4', {
                                        source2: 'alt.ogg',
                                        poster: 'https://www.google.com/logos/google.jpg'
                                    });
                                }
                            },
                            templates: [{
                                    title: 'New Table',
                                    description: 'creates a new table',
                                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                                },
                                {
                                    title: 'Starting my story',
                                    description: 'A cure for writers block',
                                    content: 'Once upon a time...'
                                },
                                {
                                    title: 'New list with dates',
                                    description: 'New List with dates',
                                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                                }
                            ],
                            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                            height: 600,
                            image_caption: true,
                            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                            noneditable_noneditable_class: 'mceNonEditable',
                            toolbar_mode: 'sliding',
                            contextmenu: 'link image imagetools table',
                            skin: useDarkMode ? 'oxide-dark' : 'oxide',
                            content_css: useDarkMode ? 'dark' : 'default',
                            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'

                        });

                        // ClassicEditor
                        //     .create( document.querySelector( '#editor' ) )
                        //     .catch( error => {
                        //         console.error( error );
                        //     } );
                        // $('#editor').summernote({
                        //     height: 350, //set editable area's height
                        //     codemirror: { // codemirror options
                        //         theme: 'monokai'
                        //     }
                        // });
                    </script>

                    <br>
                    <div id="success"></div>
                    <button type="submit" name="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
                </form>
            </div>
        </div>
    </div>






    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
    <script type="text/javascript">
        var window_height = $(window).height();
        var window_width = $(window).width();
        var viewport_height = 0;
        var viewport_width = 0;
        if (window_width >= 500) {
            viewport_width = 480;
        } else {
            viewport_width = window_width * 0.8;
        }

        var resize = $('#upload-demo').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: { // Default { width: 100, height: 100, type: 'square' } 
                width: viewport_width,
                height: viewport_width * (21 / 40),
                // type: 'circle' //square
            },
            boundary: {
                width: viewport_width + 20,
                height: (viewport_width * (21 / 40)) + 20
            }
        });


        $('#image').on('change', function() {

            var reader = new FileReader();
            reader.onload = function(e) {
                resize.croppie('bind', {
                    url: e.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                    $('#preview_container').show();
                    $('#crop-button').show();
                    $('#image').hide();
                    $("#preview-crop-image").hide();
                });
            }
            reader.readAsDataURL(this.files[0]);
        });


        $('.upload-image').on('click', function(ev) {
            resize.croppie('result', {
                type: 'base64',
                size: 'original',

            }).then(function(img) {

                $('#preview_container').hide();
                $('#crop-button').hide();
                $('#image').show();
                $("#preview-crop-image").show();

                html = '<img src="' + img + '" style="width:100%" />';
                $("#preview-crop-image").html(html);

                $('#main_image').attr('value', img);

            });
        });
    </script>






























    <script>
        // On Title change, change the slug
        $('#title').on('keyup', function() {
            var title = $(this).val();
            var slug = title.replace(/[^a-z0-9-]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
            $('#slug').val(slug.toLowerCase());
        });


        // Check Slug availability on slug change
        $('#slug').on('keyup', function() {
            var slug = $(this).val();

            $.ajax({
                url: "{{ route('slugcheck') }}",
                type: 'POST',
                data: {
                    slug: slug
                },
                success: function(response) {
                    console.log(response);
                    if (response.data) {
                        $('#slug').css('border', '2px solid red');
                        $('#slug_error').html('Slug already exists');
                        $('#slug_error').show();
                        $('#submit').attr('disabled', true);
                    } else {
                        $('#slug').css('border', '2px solid green');
                        $('#slug_error').hide();
                        $('#submit').attr('disabled', false);
                    }
                }
            });
        });
    </script>
@endsection
