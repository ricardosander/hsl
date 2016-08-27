<?php 
  $b = $a;
 ?>
<header class="left">
  <a href='<?php if($b != "home"){echo "../"; } ?>' >
  	<img src="<?php if($b != "home"){echo "../"; } ?>img/logo.png" alt="HLS Arquitetura e Design" />
  </a>
  <nav class="<?php echo $b;?>">
    
    <li class="home <?php if($b === "home"){echo "ativo"; } ?>"><a href='<?php if($b != "home"){echo "../"; } ?>'>HOME <span></span></a></li>

    <li class="escritorio <?php if($b === "escritorio"){echo "ativo"; } ?>"><a href='<?php if($b != "home"){echo "../"; } ?>escritorio'>ESCRITÓRIO <span></span></a></li>

    <li class="atuacao <?php if($b === "atuacao"){echo "ativo"; } ?>"><a href='<?php if($b != "home"){echo "../"; } ?>atuacao'>ATUAÇÃO <span></span></a></li>

<!--     <li class="parceiros <?php if($b === "parceiros"){echo "ativo"; } ?>"><a href='<?php if($b != "home"){echo "../"; } ?>#'>PARCEIROS <span></span></a></li>
 -->
<!--     <li class="novidades <?php if($b === "novidades"){echo "ativo"; } ?>"><a href='<?php if($b != "home"){echo "../"; } ?>#'>NOVIDADES <span></span></a></li>
 -->
    <li class="contato <?php if($b === "contato"){echo "ativo"; } ?>"><a href='<?php if($b != "home"){echo "../"; } ?>contato'>CONTATO <span></span></a></li>

  </nav>
  <div class="social">
    <div class="facebook"><a href="https://www.fb.com/HslArquitetura" target="_blank"><i></i><span>Facebook</span></a></div>
    <!-- <div class="instagram"><a href=""><i></i><span>Instagram</span></a></div> -->
  </ul>
</header>