@include('template_blog.head')
	<div class="section">
		<div class="container">
            <div id="hot-post" class="row hot-post">
                @yield('isi')
                @include('template_blog.widget')
        </div>
    </div>
</div>
@include('template_blog.footer')