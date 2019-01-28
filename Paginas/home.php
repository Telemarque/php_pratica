 <h1>PHP na Pratica</h1>
      <!--  <h2> <?php echo getInfo("titulo") ?></h2> -->
       <p> <?php echo getInfo("descricao") ?></p>
       <hr>
       <h2>Pesquisar</h2>
       <form action="busca" method="GET">
       		<input type="text" name="busca" placeholder="busca">
       		<button type="">Pesquisar</button>	
       </form>
       <hr>
       <h2>Lista do produtos</h2>
        
     <ul>
     	<?php foreach ($produtos as $key => $produto):  ?>
     		<li>
     			<?php echo $produto["titulo"]." - ".$produto["descricao"]." - "." R$ ".number_format($produto['valor'],2,",","."); ?>
     		</li>
     	<?php endforeach; ?>
     </ul>