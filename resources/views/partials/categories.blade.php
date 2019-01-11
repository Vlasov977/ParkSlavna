<section class="categories">
    <div class="container">

        @foreach($categories as $category)
            <div class="categories_item">
                <a href="{{ url('service-' . $category->slug) }}">

                    @if($category->image)
                        <img class="categories_item_visible"src="{{ asset('storage/' . $category->image) }}">
                    @else
                        <img class="categories_item_visible"src="images/categories_item_7.png">
                    @endif

                    <img class="categories_item_hover" src="images/categories_item_6.png">
                    <p>
                        {{ $category->title }}
                        <br> <br>
                    </p>
                </a>
            </div>
        @endforeach

        {{--<div class="categories_item">--}}
            {{--<a href="#">--}}
                {{--<img class="categories_item_visible"src="images/categories_item_1.png">--}}
                {{--<img class="categories_item_hover" src="images/categories_item_6.png">--}}
                {{--<p>--}}
                    {{--ДИЗАЙН--}}
                    {{--<br> <br>--}}
                {{--</p>--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="categories_item">--}}
            {{--<a href="#">--}}
                {{--<img class="categories_item_visible" src="images/categories_item_2.png">--}}
                {{--<img class="categories_item_hover" src="images/categories_item_6.png">--}}
                {{--<p>--}}
                    {{--НАРУЖНАЯ--}}
                    {{--РЕКЛАМА--}}
                {{--</p>--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="categories_item">--}}
            {{--<a href="#">--}}
                {{--<img class="categories_item_visible" src="images/categories_item_3.png">--}}
                {{--<img class="categories_item_hover" src="images/categories_item_6.png">--}}
                {{--<p>--}}
                    {{--ПЕЧАТЬ <br>--}}
                    {{--> до 6M ш. <--}}
                {{--</p>--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="categories_item">--}}
            {{--<a href="#">--}}
                {{--<img class="categories_item_visible" src="images/categories_item_4.png">--}}
                {{--<img class="categories_item_hover" src="images/categories_item_6.png">--}}
                {{--<p>--}}
                    {{--ЛАЗЕРНАЯ <br>--}}
                    {{--РЕЗКА--}}
                {{--</p>--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="categories_item">--}}
            {{--<a href="#">--}}
                {{--<img class="categories_item_visible" src="images/categories_item_5.png">--}}
                {{--<img class="categories_item_hover" src="images/categories_item_6.png">--}}
                {{--<p>--}}
                    {{--ТРАФАРЕТНАЯ--}}
                    {{--ПЕЧАТЬ--}}
                {{--</p>--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="categories_item">--}}
            {{--<a href="#">--}}
                {{--<img class="categories_item_visible" src="images/categories_item_6.png">--}}
                {{--<img class="categories_item_hover" src="images/categories_item_6.png">--}}
                {{--<p>--}}
                    {{--ПЛОТТЕРНАЯ--}}
                    {{--РЕЗКА--}}
                {{--</p>--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="categories_item">--}}
            {{--<a href="#">--}}
                {{--<img class="categories_item_visible" src="images/categories_item_7.png">--}}
                {{--<img class="categories_item_hover" src="images/categories_item_6.png">--}}
                {{--<p>--}}
                    {{--СУВЕНИРНАЯ ПРОДУКЦИЯ--}}
                {{--</p>--}}
            {{--</a>--}}
        {{--</div>--}}
    </div>
</section>

<div class="categories_margin_bg"></div>