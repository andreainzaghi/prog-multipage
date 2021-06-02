

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'Home')">Home</button>
      <button class="tablinks" onclick="openCity(event, 'Prodotto')">Prodotto</button>
      <button class="tablinks" onclick="openCity(event, 'Chilopage')">Chilopage</button>
      <button class="tablinks" onclick="openCity(event, 'DietaConsigliata')">Dieta Consigliata</button>
      <button class="tablinks" onclick="openCity(event, 'DietaPersonalizzata')">Dieta Personalizzata</button>
    </div>

    <!-- Tab content -->
    <div id="Home" class="tabcontent">

      <!-- <div class="container-home" >
	<section>
        <form method="GET"  action="/search">
			<div><input name="search" v-model="title" type="search" class = "form-control" placeholder="Scopri le caratteristiche della tua dieta"></div>
			<div><button type="submit"  v-on:click='imagesSearch'>submit</button></div>
		</form>
	</section>
	<section>
		<div class="cards">
			 @foreach ($Foods as $food)
			<div class="card">
				<div >
					<div >
						<img :src="image.largeImageURL" alt="" height=100px width=100px>

					  </div>
				</div>
				<a href="{{route('prodotto', [ 'id' => $food['id'] ])}}"><span>{{$food['name']}}</span><p>Calorie <span>{{$food['Calories']}}</span></p><p>Proteine <span>{{$food['Protein_g']}}</span></p><p>Grassi <span>{{$food['Fat_g']}}</span> </p><p>Carboidrati <span>{{$food['Carbohydrate_g']}}</span></p></a>
			</div>
			@endforeach
		</div>
	</section>
</div> -->
    </div>
    <!-- fine homepage -->
    <div id="Prodotto" class="tabcontent">
      <h3>Prodotto</h3>
      <p>London is the capital city of England.</p>
    </div>

    <div id="Chilopage" class="tabcontent">
      <h3>Chilopage</h3>
      <p>London is the capital city of England.</p>
    </div>

    <div id="DietaConsigliata" class="tabcontent">
      <h3>DietaConsigliata</h3>
      <p>Paris is the capital of France.</p>
    </div>

    <div id="DietaPersonalizzata" class="tabcontent">
      <h3>DietaPersonalizzata</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js" integrity="sha512-BKbSR+cfyxLdMAsE0naLReFSLg8/pjbgfxHh/k/kUC82Hy7r6HtR5hLhobaln2gcTvzkyyehrdREdjpsQwy2Jw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js" charset="utf-8"></script>
    <script src="js/vuescript.js" charset="utf-8"></script>

</body>
</html>
