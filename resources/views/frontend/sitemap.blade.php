<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
<loc>{{$domain}}</loc>
<priority>1</priority>
</url>
@foreach ($categories as $category)
    <url>
    <loc>{{ $category->url() }}</loc>
    <priority>0.8</priority>
    </url>
@endforeach
@foreach ($products as $product)
    <url>
    <loc>{{ $product->url() }}</loc>
    <priority>0.7</priority>
    </url>
@endforeach
</urlset>
