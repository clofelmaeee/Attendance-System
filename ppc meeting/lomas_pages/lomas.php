<?php
    include "../includes/header.php";
    include "../includes/sidebar.php";
    require "../connection/dbConnect.php";
?>
<html>
    <div class="container-index">
    <div class="container-lomas">
        <div class="card">
            <div class="card-header">
            <a href="../pages/index.php" class = "btn-back-top"><img src="../img/arrow-left.svg"></a> LOMAS
            </div>
        </div>
      
            <div class="btn btn-group">
                <a href="../lomas_pages/view_acolytes.php"><button>Acolytes</button></a>
                <a href="../lomas_pages/view_catechists.php"><button>Catechists</button></a>
                <a href="../lomas_pages/view_choir.php"><button>Choir</button></a>
                <a href="../lomas_pages/view_collector.php"><button>Collector</button> </a>
            </div>  
            <div class="btn btn-group">
                <a href="../lomas_pages/view_pycc.php"> <button>Parish Youth Coordinating Council</button></a>
                <a href="../lomas_pages/view_ppc.php"><button>Parish Pastoral Council</button></a>
                <a href="../lomas_pages/view_sfc.php"><button>Singles For Christ</button></a>  
            </div>  

    </div>
    
   
</html>

            
 