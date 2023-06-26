@extends('layouts.community.app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">

<div class="wrapper" style='background-color: #f2f2f2; background-image: url("https://www.transparenttextures.com/patterns/shattered.png");'>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: transparent; border-left:0px;">
        <section class="content-header">
            <h1 style="color:black">
                <strong>Community Assets</strong>
                <small>Dashboard</small>
            </h1>
        </section>
        <br>

        <section class="content">
            <!--FIRST LINE========================================-->   
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px">                    
                    <h3 style="margin-top:-1px; color:black; float:left">Assessment Images</h3>
                    <a class="btn add" href="/CommunityAssessment/assessment/{{$id}}"><strong><i class="fa fa-arrow-left"></i>  Back</strong></a>
                    <br>
                    <br>
                    @foreach ($images as $i)
                        <div class="col-lg-3 col-md-3 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="{{$i->img}}" data-target="#image-gallery">
                                <img class="img-thumbnail" src="{{$i->img}}" alt="Another alt text" style="height:8vw">
                            </a>
                            <p><center><strong>{{$i->type}}</strong><br>{{$i->description}}</center></p>
                        </div>
                    @endforeach
                               
                    </div>
                </div>            
            </div>      
            <br>    
        </section><!-- /.content -->

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body" style="height:600px">
                        <center><img id="image-gallery-image" class="img-responsive col-md-12" src="" style="width:80%; max-height:550px; float:none"></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i></button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div><!-- /.content-wrapper -->
<script>
    let modalId = $('#image-gallery');
    
    $(document)
      .ready(function () {
    
        loadGallery(true, 'a.thumbnail');
    
        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
          $('#show-previous-image, #show-next-image')
            .show();
          if (counter_max === counter_current) {
            $('#show-next-image')
              .hide();
          } else if (counter_current === 1) {
            $('#show-previous-image')
              .hide();
          }
        }
    
        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */
    
        function loadGallery(setIDs, setClickAttr) {
          let current_image,
            selector,
            counter = 0;
    
          $('#show-next-image, #show-previous-image')
            .click(function () {
              if ($(this)
                .attr('id') === 'show-previous-image') {
                current_image--;
              } else {
                current_image++;
              }
    
              selector = $('[data-image-id="' + current_image + '"]');
              updateGallery(selector);
            });
    
          function updateGallery(selector) {
            let $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-title')
              .text($sel.data('title'));
            $('#image-gallery-image')
              .attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
          }
    
          if (setIDs == true) {
            $('[data-image-id]')
              .each(function () {
                counter++;
                $(this)
                  .attr('data-image-id', counter);
              });
          }
          $(setClickAttr)
            .on('click', function () {
              updateGallery($(this));
            });
        }
      });
    
    // build key actions
    $(document)
      .keydown(function (e) {
        switch (e.which) {
          case 37: // left
            if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
              $('#show-previous-image')
                .click();
            }
            break;
    
          case 39: // right
            if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
              $('#show-next-image')
                .click();
            }
            break;
    
          default:
            return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
      });
</script>
@endsection
