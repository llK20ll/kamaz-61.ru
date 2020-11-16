@extends('layouts.master')

@section('title', 'Новости')

@section('content')
<div class="vk__news">

    <h1 class="mb-2 text-center">Новости</h1>

    
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

    <!-- VK Widget -->
    <div id="vk_groups"></div>
    <script type="text/javascript">
    VK.Widgets.Group("vk_groups", {mode: 4, wide: 2, height: "400"}, 108052005);
    </script>


   
    <div id="vk_post_-108052005_33"></div>
    {{-- <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script> --}}
    <script type="text/javascript">
    (function() {
        VK.Widgets.Post("vk_post_-108052005_33", -108052005, 33, 'coE6wHdvEMkP9rSH67TK5BbLKlI', {width: 550});
    }());
    </script>
    

    <div id="vk_post_-108052005_32"></div>
    {{-- <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script> --}}
    <script type="text/javascript">
      (function() {
        VK.Widgets.Post("vk_post_-108052005_32", -108052005, 32, 'XTXbmqZEPPTNoHanMLEuvse7pL4', {width: 550});
      }());
    </script>


</div>
@endsection