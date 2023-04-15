<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Compufix - Base de Datos</title>
    
    <link rel="stylesheet" type="text/css" href="css/añadir_styles.css">
  </head>
  <!--comienzo de la pagina-->
  <body>
      <!--panel superior-->
      <div class="header">
      <div class="header-logo">
        <img src="img/compufix.jpg" alt="Logo de Compufix" style="max-width: 200px; max-height: 100px;">
        <h1 class="header-title">Compufix</h1>
      </div>
      <div class="header-nav">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          
        </ul>
      </div>
    </div>



    <div class="container-global">

     

      <div class="main-content">
        
        <!--agregar cliente form-->
        <div  class="form-container">
        <div class="content">
          <h2 class="main-content-title">agregar cliente</h2>
          <h3 class="main-content-description">"para añadir un cliente"</h3>
        </div>
        <br>
                <form action="php/crud_clientes.php" method="post" >

                      <div class="form-group">
                        <label for="id_cliente">id cliente</label>
                        <input type="text" class="form-control" id="id_cliente" name="id_cliente" >
                      </div>

                      
                      <div class="form-group">
                        <label for="N_cliente">Nombre Cliente</label>
                        <input type="text" class="form-control" id="N_cliente" name="N_cliente" maxlength="50">
                      </div>

                      <div class="form-group">
                        <label for="tel">Telefono Cliente</label>
                        <input type="text" class="form-control" id="tel" name="tel" maxlength="14" >
                      </div>
                      
                      <div class="form-group">
                        <label for="direccion">direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" maxlength="100" >
                      </div>
                      
                      <div class="form-group">
                        <label for="correo_electronico">Correo Electronico</label>
                        <input type="text" class="form-control" id="correo_electronico" name="correo_electronico" maxlength="100" >

                    <br/>
                    
                    <button type="submit" id="guardar" name="guardar" class="button-guardar">Guardar</button>
                  
                    
                </form>

              </div>

          

      </div>

      <!--holaaa-->
      <div class="main-content">
        
        
        <!--agregar pedido form-->
        <div   class="form-container">
                  <div class="content">
                    <h2 class="main-content-title">agregar pedido</h2>
                    <h3 class="main-content-description">"para añadir un pedido a un cliente"</h3>
                  
                  </div>
                  <br>
                  <form action="php/crud_pedidos.php" method="post" >

                        <div class="form-group">
                          <label for="id_pedido">id pedido</label>
                          <input type="text" class="form-control" id="id_pedido" name="id_pedido" >
                        </div>

                        
                        <div class="form-group">
                          <label for="fecha">fecha</label>
                          <input type="text" class="form-control" id="fecha" name="fecha" >
                        </div>

                        <div class="form-group">
                          <label for="forma_de_pago">forma de pago</label>
                          <input type="text" class="form-control" id="forma_de_pago" name="forma_de_pago"  >
                        </div>

                        <div class="form-group">
                          <label for="direccion">direccion</label>
                          <input type="text" class="form-control" id="direccion" name="direccion"  >
                        </div>
                        
                        <div class="form-group">
                          <label for="enviado">enviado?</label>
                          <input type="text" class="form-control" id="enviado" name="enviado" >
                        </div>
                        
                        <div class="form-group">
                          <label for="cliente_id_cliente">codigo de cliente del pedido</label>
                          <input type="text" class="form-control" id="cliente_id_cliente" name="cliente_id_cliente" >

                      <br/>
                      
                      <button type="submit" id="guardar" name="guardar" class="button-guardar">Guardar</button>
                    
                      
                  </form>

                </div>

            

      </div>

      












                

      <!--holaaa-->
      <div class="main-content">

            



              <!--agregar producto form-->
              <div class="form-container">
                <div class="content">
                  <h2 class="main-content-title">agregar producto</h2>
                
                </div>
                <br>
                <form action="php/crud_pedidos.php" method="post" >

                      <div class="form-group">
                        <label for="id_pedido">id pedido</label>
                        <input type="text" class="form-control" id="id_pedido" name="id_pedido" >
                      </div>

                      
                      <div class="form-group">
                        <label for="fecha">fecha</label>
                        <input type="text" class="form-control" id="fecha" name="fecha" >
                      </div>

                      <div class="form-group">
                        <label for="forma_de_pago">forma de pago</label>
                        <input type="text" class="form-control" id="forma_de_pago" name="forma_de_pago"  >
                      </div>

                      <div class="form-group">
                        <label for="direccion">direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"  >
                      </div>
                      
                      <div class="form-group">
                        <label for="enviado">enviado?</label>
                        <input type="text" class="form-control" id="enviado" name="enviado" >
                      </div>
                      
                      <div class="form-group">
                        <label for="cliente_id_cliente">codigo de cliente del pedido</label>
                        <input type="text" class="form-control" id="cliente_id_cliente" name="cliente_id_cliente" >

                    <br/>
                    
                    <button type="submit" id="guardar" name="guardar" class="button-guardar">Guardar</button>
                  
                    
                </form>

              </div>

              







      </div>



      <!--holaaa-->
      <div class="main-content">

            



              <!--agregar pedidos_has_producto form-->
              <div class="form-container">
                <div class="content">
                  <h2 class="main-content-title">pedidos-productos cantidad</h2>
                
                </div>
                <br>
                <form action="php/crud_pedidos.php" method="post" >

                      <div class="form-group">
                        <label for="id_pedido">id pedido</label>
                        <input type="text" class="form-control" id="id_pedido" name="id_pedido" >
                      </div>

                      
                      <div class="form-group">
                        <label for="fecha">fecha</label>
                        <input type="text" class="form-control" id="fecha" name="fecha" >
                      </div>

                      <div class="form-group">
                        <label for="forma_de_pago">forma de pago</label>
                        <input type="text" class="form-control" id="forma_de_pago" name="forma_de_pago"  >
                      </div>

                      <div class="form-group">
                        <label for="direccion">direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"  >
                      </div>
                      
                      <div class="form-group">
                        <label for="enviado">enviado?</label>
                        <input type="text" class="form-control" id="enviado" name="enviado" >
                      </div>
                      
                      <div class="form-group">
                        <label for="cliente_id_cliente">codigo de cliente del pedido</label>
                        <input type="text" class="form-control" id="cliente_id_cliente" name="cliente_id_cliente" >

                    <br/>
                    
                    <button type="submit" id="guardar" name="guardar" class="button-guardar">Guardar</button>
                  
                    
                </form>

              </div>

              







      </div>

      <!--holaaa-->
      <div class="main-content">

            



              <!--agregar proveedor form-->
              <div class="form-container">
                <div class="content">
                  <h2 class="main-content-title">proveedor</h2>
                
                </div>
                <br>
                <form action="php/crud_pedidos.php" method="post" >

                      <div class="form-group">
                        <label for="id_pedido">id pedido</label>
                        <input type="text" class="form-control" id="id_pedido" name="id_pedido" >
                      </div>

                      
                      <div class="form-group">
                        <label for="fecha">fecha</label>
                        <input type="text" class="form-control" id="fecha" name="fecha" >
                      </div>

                      <div class="form-group">
                        <label for="forma_de_pago">forma de pago</label>
                        <input type="text" class="form-control" id="forma_de_pago" name="forma_de_pago"  >
                      </div>

                      <div class="form-group">
                        <label for="direccion">direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"  >
                      </div>
                      
                      <div class="form-group">
                        <label for="enviado">enviado?</label>
                        <input type="text" class="form-control" id="enviado" name="enviado" >
                      </div>
                      
                      <div class="form-group">
                        <label for="cliente_id_cliente">codigo de cliente del pedido</label>
                        <input type="text" class="form-control" id="cliente_id_cliente" name="cliente_id_cliente" >

                    <br/>
                    
                    <button type="submit" id="guardar" name="guardar" class="button-guardar">Guardar</button>
                  
                    
                </form>

              </div>

              







      </div>

      <!--holaaa-->
      <div class="main-content">

   

              <!--agregar servicios form-->
              <div class="form-container">
                <div class="content">
                  <h2 class="main-content-title">servicios</h2>
                
                </div>
                <br>
                <form action="php/crud_pedidos.php" method="post" >

                      <div class="form-group">
                        <label for="id_pedido">id pedido</label>
                        <input type="text" class="form-control" id="id_pedido" name="id_pedido" >
                      </div>

                      
                      <div class="form-group">
                        <label for="fecha">fecha</label>
                        <input type="text" class="form-control" id="fecha" name="fecha" >
                      </div>

                      <div class="form-group">
                        <label for="forma_de_pago">forma de pago</label>
                        <input type="text" class="form-control" id="forma_de_pago" name="forma_de_pago"  >
                      </div>

                      <div class="form-group">
                        <label for="direccion">direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"  >
                      </div>
                      
                      <div class="form-group">
                        <label for="enviado">enviado?</label>
                        <input type="text" class="form-control" id="enviado" name="enviado" >
                      </div>
                      
                      <div class="form-group">
                        <label for="cliente_id_cliente">codigo de cliente del pedido</label>
                        <input type="text" class="form-control" id="cliente_id_cliente" name="cliente_id_cliente" >

                    <br/>
                    
                    <button type="submit" id="guardar" name="guardar" class="button-guardar">Guardar</button>
                  
                    
                </form>

              </div>

   

      </div>

      <!--holaaa-->
      <div class="main-content">

              <!--agregar servicios_has_vendedor form-->
              <div class="form-container">
                <div class="content">
                  <h2 class="main-content-title">Reporte de Servicios</h2>
                
                </div>
                <br>
                <form action="php/crud_pedidos.php" method="post" >

                      <div class="form-group">
                        <label for="id_pedido">id pedido</label>
                        <input type="text" class="form-control" id="id_pedido" name="id_pedido" >
                      </div>

                      
                      <div class="form-group">
                        <label for="fecha">fecha</label>
                        <input type="text" class="form-control" id="fecha" name="fecha" >
                      </div>

                      <div class="form-group">
                        <label for="forma_de_pago">forma de pago</label>
                        <input type="text" class="form-control" id="forma_de_pago" name="forma_de_pago"  >
                      </div>

                      <div class="form-group">
                        <label for="direccion">direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"  >
                      </div>
                      
                      <div class="form-group">
                        <label for="enviado">enviado?</label>
                        <input type="text" class="form-control" id="enviado" name="enviado" >
                      </div>
                      
                      <div class="form-group">
                        <label for="cliente_id_cliente">codigo de cliente del pedido</label>
                        <input type="text" class="form-control" id="cliente_id_cliente" name="cliente_id_cliente" >

                    <br/>
                    
                    <button type="submit" id="guardar" name="guardar" class="button-guardar">Guardar</button>
                  
                    
                </form>

              </div>

       

      </div>

      <!--holaaa-->
      <div class="main-content">

              <!--agregar cendedor form-->
              <div class="form-container">
                <div class="content">
                  <h2 class="main-content-title">vendedor</h2>
                
                </div>
                <br>
                <form action="php/crud_pedidos.php" method="post" >

                      <div class="form-group">
                        <label for="id_pedido">id pedido</label>
                        <input type="text" class="form-control" id="id_pedido" name="id_pedido" >
                      </div>

                      
                      <div class="form-group">
                        <label for="fecha">fecha</label>
                        <input type="text" class="form-control" id="fecha" name="fecha" >
                      </div>

                      <div class="form-group">
                        <label for="forma_de_pago">forma de pago</label>
                        <input type="text" class="form-control" id="forma_de_pago" name="forma_de_pago"  >
                      </div>

                      <div class="form-group">
                        <label for="direccion">direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"  >
                      </div>
                      
                      <div class="form-group">
                        <label for="enviado">enviado?</label>
                        <input type="text" class="form-control" id="enviado" name="enviado" >
                      </div>
                      
                      <div class="form-group">
                        <label for="cliente_id_cliente">codigo de cliente del pedido</label>
                        <input type="text" class="form-control" id="cliente_id_cliente" name="cliente_id_cliente" >

                    <br/>
                    
                    <button type="submit" id="guardar" name="guardar" class="button-guardar">Guardar</button>
                  
                    
                </form>

              </div>

      </div>

    </div>
    
  
  </body>

</html>
