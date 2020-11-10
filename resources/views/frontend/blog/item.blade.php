<a href="{{ $blog->url() }}">
<div class="blog-box">
        <div class="blog-image">
            <img class="img-responsive" src="{{ $blog->image?$blog->image:"http://via.placeholder.com/1200x1200" }}" alt="{{ $blog->name }}">
        </div>
        <div class="blog-info">
            <h3 class="blog-title">{{ $blog->name }}</h3>
        </div>
    </div>
</a>
