<?php 

if( isset( $_POST['mot'] ) )
{
  $mot = $_POST['mot'];
  require '../../class/database.php';

  if($Mode==="aff"){
	$get_nombre_annonce = select_all_annonces_non_adhere();
}elseif($Mode==="rech"){
	$get_nombre_annonce = count_search_annonce($recherche);
}else{
	$get_nombre_annonce = select_all_annonces_non_adhere();
}

//LISTE DES ANNONCES LIBRE
		
	$get_nombre_annonce = $get_nombre_annonce;
	$nombre_annonce = $get_nombre_annonce->fetch();
	$nbre_annonce = $nombre_annonce["nombre_annonces"];
	$get_nombre_annonce->closeCursor();

	$perPage = 6;
	$nbPage = ceil($nbre_annonce/$perPage);

	if(isset($_GET["p"]) && $_GET["p"]>0 && $_GET["p"]<= $nbPage){
		$cPage = $_GET["p"];
	}else{
		$cPage = 1;
	}

	if($Mode==="aff"){
		$annonces = select_all_annonces_perPage($cPage,$perPage);
	}elseif($Mode==="rech"){
		$annonces = search_annonce($recherche,$cPage,$perPage);
	}else{
		$annonces = select_all_annonces_perPage($cPage,$perPage);
	}
	//RECUPERATION DES ANNONCES
	$annonces = $annonces;
	if($annonces->fetch()){
		while($annonce = $annonces->fetch()){
			
?>
			<!-- ListAnnonces Area -->
		   
				<div class="col-lg-4 col-sm-6">
					<div class="service-card">
						<a href="service-details.php">
							<img src="assets/img/service-icon/1.png" alt="Images">
						</a>
						<a href="service-details.php">
						
						</a>
						<p>
						<?php echo $annonce["DescriptionAnnonce"]; ?>
							<?php
								//RECUPERATION DU TYPE D'ANNONCE
								$get_typeAnnonce = edit_type_annonce($annonce["IdTypeAnnonce"]);
								$typeAnnonce = $get_typeAnnonce->fetch();
								echo'<h3>'.$typeAnnonce["NomTypeAnnonce"].'</h3>';
								$get_typeAnnonce->closeCursor();
							?>
						</p>
						<!--<div class="portfolio-tag">
								<a href="#"><span>Optimizing</span></a>
						</div>-->
						<div class="portfolio-content">
								<a href="#" class="default-btn"><h3>Adhérer</h3></a>
								
						</div>
					</div>
				</div>
<?php
			}
			$annonces->closeCursor();
?>
						   
				<!-- Pagination Area -->
				<div class="col-lg-12">
					<div class="pagination-area">
						<nav aria-label="Page navigation example text-center">
							<ul class="pagination">
								<?php 
									for($i=1;$i<=$nbPage;$i++){
										if($i==1 and $i==$cPage){
											echo '<li class="disabled page-item"><a href="#" class="page-link page-links"><i class="bx bx-chevrons-left"></i></a></li>';
										}elseif($i==1 and $i<$cPage){
											echo '<li class="page-item"><a class="page-link" href="annonces.php?p='.($cPage-1).'">«</a></li>';
										} 
										if($i==$cPage){
											echo '<li class="current page-item"><a class="page-link" href="#">'.$i.'<span class="sr-only">(current)</span></a></li>';
										}else{
											echo '<li class="page-item"><a class="page-link" href="annonces.php?p='.$i.'">'.$i.'</a></li>';
										}
										if($i==$nbPage and $cPage != $nbPage) echo '<li class="page-item"><a class="page-link" href="annonces.php?p='.($cPage+1).'"><i class="bx bx-chevrons-right"></i></a></li>'; elseif($i==$nbPage) echo '<li class="disabled page-item"><a class="page-link" href="#"><i class="bx bx-chevrons-right"></i></a></li>';
									}
								?>
							</ul>
						</nav>
					</div>
				</div>


