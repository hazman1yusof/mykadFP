<!DOCTYPE html>

<html lang="en">
<head>
	
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.8/dist/semantic.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/se/dt-1.11.3/datatables.min.css"/>
 
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.8/dist/semantic.min.js"></script>
		<script src="https://cdn.datatables.net/v/se/dt-1.11.3/datatables.min.js"></script>

	@yield('css')
	
    <style>
    	.preloader {
            width: 100%;
            height: 100%;
            top: 0;
            position: fixed;
            z-index: 99999;
            background: #fff;
      }
      .cssload-speeding-wheel {
          position: absolute;
          top: calc(50% - 3.5px);
          left: calc(50% - 3.5px);
          width: 31px;
          height: 31px;
          margin: 0 auto;
          border: 2px solid rgba(97,100,193,0.98);
          border-radius: 50%;
          border-left-color: transparent;
          border-right-color: transparent;
          animation: cssload-spin 425ms infinite linear;
          -o-animation: cssload-spin 425ms infinite linear;
          -ms-animation: cssload-spin 425ms infinite linear;
          -webkit-animation: cssload-spin 425ms infinite linear;
          -moz-animation: cssload-spin 425ms infinite linear;
      }
      @keyframes cssload-spin {
        100%{ transform: rotate(360deg); transform: rotate(360deg); }
      }

      @-o-keyframes cssload-spin {
        100%{ -o-transform: rotate(360deg); transform: rotate(360deg); }
      }

      @-ms-keyframes cssload-spin {
        100%{ -ms-transform: rotate(360deg); transform: rotate(360deg); }
      }

      @-webkit-keyframes cssload-spin {
        100%{ -webkit-transform: rotate(360deg); transform: rotate(360deg); }
      }

      @-moz-keyframes cssload-spin {
        100%{ -moz-transform: rotate(360deg); transform: rotate(360deg); }
      }
			@yield('style')
 		</style>	
  <title>@yield('title')</title>

	<script type="text/javascript">
      $( document ).ready(function() {
          $(".preloader").fadeOut();
      });
  </script>

	@yield('js')
</head>
<body>
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>

    @include('navs')

    <div class="pusher container_sem" id="content">
        @yield('content')
    </div>

</body>

	@yield('scripts')
</html>