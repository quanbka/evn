<?php
    $is_show_on_home_page = false;
    $is_home_page = $_SERVER['REQUEST_URI'] == '/';
?>

@if(!($is_home_page || $is_show_on_home_page))
    {{-- Not show on homepage --}}
<div class="breadcrumb-container">
    <div class="container">
        <ol class="breadcrumb">
          <li><a href="/">Trang chủ</a></li>

          @if (isset($exception))
              <li class="active">{{ isset($title) ? $title : $exception->getMessage() }}</li>

          @else
              <li class="active">{{ isset($title) ? $title : "" }}</li>
          @endif
        </ol>
    </div>
</div>



@endif
