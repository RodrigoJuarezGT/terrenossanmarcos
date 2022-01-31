<section id="seccion_reviews">
    <h2>Reseñas de Clientes</h2>
    <div class="reviews">
        <ul class="reviews-sub">
            @foreach($reviews as $review)
                <li>
                    <img src="{{$review->get_image}}" width="150px" height="150px">
                    <div>
                    <p> {{$review->comment}} </p>
                    <p><b>{{$review->name}}</b></p>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="indicators"><input type="radio" id="sbtn0" name="sradio" checked="checked" /><label for="sbtn0"></label><input type="radio" id="sbtn1" name="sradio" /><label for="sbtn1"></label><input type="radio" id="sbtn2" name="sradio" /><label for="sbtn2"></label></div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

$(document).ready(function(){
	var inds= $('.reviews .indicators'),
		ind= inds.find("input"),
		indLength= parseInt(ind.length),
		ul = $('ul.reviews-sub'),
		crnt = 1,
		indx=0,
		intrvl;

	for(let i=0;i < indLength; i++){
		ind.eq(i).on('click',function(){
			if($(this).is(':checked')){
				ul.animate({'margin-left': -100 * i +'%'},500,function(){
					crnt= i + 1;
					if (i == indLength-1){
						indx= -1 ;
					} else{
						indx = i;
					}
				});
			}
		});
	}


	function startSlider(){
		intrvl = setInterval(function(){

			ul.animate({'margin-left': '-=100%'},500,function(){
				crnt++;
				if (crnt === indLength +1){
					crnt=1;
					ul.animate({'margin-left':'+=' + 100 * indLength +'%'},800);
				}
			});
			indx++;
			ind.eq(indx).prop('checked', true);

			if(indx >= 2){
				indx=-1;
			}
		},9000);

	}
	function pauseSlider(){
		clearInterval(intrvl);
	}


$('.reviews').on('mouseenter',pauseSlider).on('mouseleave',startSlider);
startSlider();

});

</script>



