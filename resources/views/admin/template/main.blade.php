<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MRHE | Dashboard</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ URL::asset('main/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('main/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('main/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ URL::asset('main/css/custom.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('main/css/mrhe.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('main/css/maps/jquery-jvectormap-2.0.1.css') }}" />
    <link href="{{ URL::asset('main/css/icheck/flat/green.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('main/css/floatexamples.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('main/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('main/css/editor/external/google-code-prettify/prettify.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('main/css/editor/index.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('main/css/select/select2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('main/css/switchery/switchery.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    <script src="{{ URL::asset('main/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('main/js/nprogress.js') }}"></script>
    <script>
        NProgress.start();
    </script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>



  <body class="nav-md">
    <div class="container body">


          <div class="main_container">

              <div class="col-md-3 left_col">
                  <div class="left_col scroll-view">

                      <div class="navbar nav_title" style="border: 0;">
                          <a href="{{url('admin')}}" class="site_title"><span>MRHE CMS</span></a>
                      </div>


                      <!-- menu prile quick info -->
                      <div class="profile">
                          <div class="profile_pic">
                              <br/>
                          </div>
                          <div class="profile_info">
                              
                          </div>
                      </div>
                      <!-- /menu prile quick info -->

                      <br />

                      @include('admin.template.side')

        
                  </div>
              </div>

              <!-- top navigation -->
              <div class="top_nav">

                  <div class="nav_menu">
                      <nav class="" role="navigation">
                          <div class="nav toggle">
                              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                          </div>

                          <ul class="nav navbar-nav navbar-right">
                              <li class="">
                                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                      <!-- <img src="{{ URL::asset('main/images/img.jpg')}}" alt=""> -->{{ $user->firstname }} {{ $user->lastname }}
                                      <span class=" fa fa-angle-down"></span>
                                  </a>
                                  <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                      <li><a href="{{url('auth/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </nav>
                  </div>

              </div>
              <!-- /top navigation -->

            <div class="right_col" role="main">
                  <div class="page-title">
                  <div class="title_left">
                            <h3 style="margin-bottom: 18px;">@yield('title')</h3>
                        </div>
                        
                        @yield('content')
                </div>
              </div>

                    

 

      </div>

      <div id="custom_notifications" class="custom-notifications dsp_none">
          <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            <li>

            </li>
          </ul>
          <div class="clearfix"></div>
          <div id="notif-group" class="tabbed_notifications"></div>
      </div>


      <script src="{{ URL::asset('main/js/bootstrap.min.js')}}"></script>

<!-- chart js -->
<script src="{{ URL::asset('main/js/chartjs/chart.min.js')}}"></script>
<!-- bootstrap progress js -->
<script src="{{ URL::asset('main/js/progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{ URL::asset('main/js/nicescroll/jquery.nicescroll.min.js')}}"></script>
<!-- icheck -->
<script src="{{ URL::asset('main/js/icheck/icheck.min.js')}}"></script>
<!-- tags -->
<script src="{{ URL::asset('main/js/tags/jquery.tagsinput.min.js')}}"></script>
<!-- switchery -->
<script src="{{ URL::asset('main/js/switchery/switchery.min.js')}}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{ URL::asset('main/js/moment.min2.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('main/js/datepicker/daterangepicker.js')}}"></script>
<!-- richtext editor -->
<script src="{{ URL::asset('main/js/editor/bootstrap-wysiwyg.js')}}"></script>
<script src="{{ URL::asset('main/js/editor/external/jquery.hotkeys.js')}}"></script>
<script src="{{ URL::asset('main/js/editor/external/google-code-prettify/prettify.js')}}"></script>
<!-- select2 -->
<script src="{{ URL::asset('main/js/select/select2.full.js')}}"></script>
<!-- form validation -->
<script type="text/javascript" src="{{ URL::asset('main/js/parsley/parsley.min.js')}}"></script>
<!-- textarea resize -->
<script src="{{ URL::asset('main/js/textarea/autosize.min.js')}}"></script>
<script>
    autosize($('.resizable_textarea'));
</script>
<!-- Autocomplete -->
<script type="text/javascript" src="{{ URL::asset('main/js/autocomplete/countries.js')}}"></script>
<script src="{{ URL::asset('main/js/autocomplete/jquery.autocomplete.js')}}"></script>
<script type="text/javascript">
    $(function () {
        'use strict';
        var countriesArray = $.map(countries, function (value, key) {
            return {
                value: value,
                data: key
            };
        });
        // Initialize autocomplete with custom appendTo:
        $('#autocomplete-custom-append').autocomplete({
            lookup: countriesArray,
            appendTo: '#autocomplete-container'
        });
    });
</script>
<script src="{{ URL::asset('main/js/custom.js')}}"></script>


<!-- select2 -->
<script>
    $(document).ready(function () {

        $(".select2_multiple").select2({
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });
    });
</script>
<!-- /select2 -->
<!-- input tags -->
<script>
    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(function () {
        $('#tags_1').tagsInput({
            width: 'auto'
        });
    });
</script>
<!-- /input tags -->
<!-- form validation -->
<script type="text/javascript">
    $(document).ready(function () {
        $.listen('parsley:field:validate', function () {
            validateFront();
        });
        $('#demo-form .btn').on('click', function () {
            $('#demo-form').parsley().validate();
            validateFront();
        });
        var validateFront = function () {
            if (true === $('#demo-form').parsley().isValid()) {
                $('.bs-callout-info').removeClass('hidden');
                $('.bs-callout-warning').addClass('hidden');
            } else {
                $('.bs-callout-info').addClass('hidden');
                $('.bs-callout-warning').removeClass('hidden');
            }
        };
    });

    $(document).ready(function () {
        $.listen('parsley:field:validate', function () {
            validateFront();
        });
        $('#demo-form2 .btn').on('click', function () {
            $('#demo-form2').parsley().validate();
            validateFront();
        });
        var validateFront = function () {
            if (true === $('#demo-form2').parsley().isValid()) {
                $('.bs-callout-info').removeClass('hidden');
                $('.bs-callout-warning').addClass('hidden');
            } else {
                $('.bs-callout-info').addClass('hidden');
                $('.bs-callout-warning').removeClass('hidden');
            }
        };
    });
    try {
        hljs.initHighlightingOnLoad();
    } catch (err) {}
</script>
<!-- /form validation -->
<!-- editor -->
<script>
    $(document).ready(function () {
        $('.xcxc').click(function () {
            $('#descr').val($('#editor').html());
        });
    });

    $(function () {
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
        'Times New Roman', 'Verdana'],
                fontTarget = $('[title=Font]').siblings('.dropdown-menu');
            $.each(fonts, function (idx, fontName) {
                fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
            });
            $('a[title]').tooltip({
                container: 'body'
            });
            $('.dropdown-menu input').click(function () {
                    return false;
                })
                .change(function () {
                    $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                })
                .keydown('esc', function () {
                    this.value = '';
                    $(this).change();
                });

            $('[data-role=magic-overlay]').each(function () {
                var overlay = $(this),
                    target = $(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });
            if ("onwebkitspeechchange" in document.createElement("input")) {
                var editorOffset = $('#editor').offset();
                $('#voiceBtn').css('position', 'absolute').offset({
                    top: editorOffset.top,
                    left: editorOffset.left + $('#editor').innerWidth() - 35
                });
            } else {
                $('#voiceBtn').hide();
            }
        };

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            } else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        };
        initToolbarBootstrapBindings();
        $('#editor').wysiwyg({
            fileUploadError: showErrorAlert
        });
        window.prettyPrint && prettyPrint();
    });
</script>
<!-- /editor -->
      <script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/select2.min.js"></script>
      @yield('footer')
</body>

</html>