<section id="wid-{{ $layout['wid']['id'] }}"
         class="{{ @$layout['wid']['options']->session->class }}" {!! @$layout['wid']['options']->session->attr !!}>
    <div class="container">
        @if(isset($layout['wid']['show_title']) && $layout['wid']['show_title'] == 1)
            <header class="mb-5">
                <h2 class="{{ @$layout['wid']['options']->header->class }}" {!! @$layout['wid']['options']->header->attr !!}>
                    @if (trim($layout['wid']['link']) != '')
                        <a class="{!! $layout['wid']['options']->link->class !!}"
                           href="{{ $layout['link'] }}">{{ $layout['wid']['title'] }}</a>
                    @else
                        {!! $layout['wid']['title'] !!}
                    @endif
                </h2>
            </header>
        @endif
        <div class="{{ @$layout['wid']['options']->body->class }}" {!! @$layout['wid']['options']->body->attr !!}>
            @yield('wid_content')
        </div>
    </div>
</section>
