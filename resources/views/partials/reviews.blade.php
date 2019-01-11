<section class="reviews">
	<div class="container-fluid">

		<div class="row position_line position_line_top">
			<div class=" reviews_slide_line">
				<div class="left_point"></div>
				<div class="right_point"></div>
			</div>
		</div>

		<div class="reviews_slider_head">
			<h2>Что о нас говорят?</h2>
			<p>
				Предлагаем вам прочесть отзывы наших гостей, мы будем очень рады, если вы оставите свой.
			</p>
		</div>

		<div class="reviews_slider">

			@foreach($reviews as $review)
				<div class="reviews_slider_item">
					<div class="row row_head_info">
						<div class="reviews_slider_img">
							<img src="{{ asset('storage/' . $review->image) }}">
							<div class="bg_i_text">
								{{ $review->name }}
							</div>
						</div>
						
					</div>
					<div class="row row_content_slider">
						<div class="slider_bg">
							<p>
								{{ $review->review }}
							</p>
						</div>
						<div class="clider_info">
							<span class="reviews_current_number_slide"></span>
							<span class="clider_info_line"></span>
							<span class="reviews_all_number_slide"></span>
						</div>
					</div>
				</div>
			@endforeach

			{{--<div class="reviews_slider_item">--}}
				{{--<div class="row position_line">--}}
				{{--<div class=" reviews_slide_line">--}}
				{{--<div class="left_point"></div>--}}
				{{--<div class="right_point"></div>--}}
				{{--</div>--}}
				{{--</div>--}}
				{{--<div class="row row_head_info">--}}
				{{--<div class="reviews_slider_img">--}}
				{{--<img src="{{ asset('images/reviews_slider_example.png') }}">--}}
				{{--<div class="bg_i_text">--}}
				{{--Михаил Ивановз--}}
				{{--</div>--}}
				{{--</div>--}}
				{{--<div class="reviews_slider_head">--}}
				{{--<h2>Что о нас говорят?</h2>--}}
				{{--<p>--}}
				{{--Предлагаем вам прочесть отзывы наших гостей, мы будем очень рады, если вы оставите свой.--}}
				{{--</p>--}}
				{{--</div>--}}
				{{--</div>--}}
				{{--<div class="row row_content_slider">--}}
				{{--<div class="slider_bg">--}}
				{{--<p>--}}
				{{--"Идеальное место, чтоб уехать из городa, что мы собственно и сделали. Сервис на высоте, атмосфера как дома, очень понравилось и домой ехать не хотелось. Спасибо персоналу за вежливость и позитив)"--}}
				{{--</p>--}}
				{{--</div>--}}
				{{--<div class="clider_info">--}}
				{{--<span class="reviews_current_number_slide"></span>--}}
				{{--<span class="clider_info_line"></span>--}}
				{{--<span class="reviews_all_number_slide"></span>--}}
				{{--</div>--}}
				{{--</div>--}}
				{{--<div class="row row_links">--}}
				{{--<div class="col-xl-6 col-lg-8 col-md-6 col-sm-6 add_reviews_div">--}}
				{{--<a class="add_reviews" href="#">Добавить отзыв</a>--}}
				{{--</div>--}}
				{{--<div class="col-xl-6 col-lg-4 col-md-6 col-sm-6 all_reviews_div">--}}
				{{--<a class="all_reviews" href="#">Читать все отзывы</a>--}}
				{{--</div>--}}
				{{--</div>--}}
				{{--<div class="row position_line">--}}
				{{--<div class=" reviews_slide_line">--}}
				{{--<div class="left_point"></div>--}}
				{{--<div class="right_point"></div>--}}
				{{--</div>--}}
				{{--</div>--}}
				{{--</div>--}}

		</div>
		<div class="row position_line">
			<div class=" reviews_slide_line">
				<div class="left_point"></div>
				<div class="right_point"></div>
			</div>
		</div>
	</div>
</section>