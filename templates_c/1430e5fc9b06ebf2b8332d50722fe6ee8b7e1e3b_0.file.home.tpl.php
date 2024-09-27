<?php
/* Smarty version 4.3.4, created on 2024-09-27 23:00:46
  from 'C:\xampp\htdocs\web2\todo-list\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f71cfe2283f5_28445283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1430e5fc9b06ebf2b8332d50722fe6ee8b7e1e3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\todo-list\\templates\\home.tpl',
      1 => 1727470844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_66f71cfe2283f5_28445283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
            <div class="container mt-2">
                <section>
                    <h4>Lista de tareas</h4>
                </section>
                <section>
                <form method="post" action="nuevaTarea">
                        <div class="mb-3">
                            <label for="exampleInputdescripcion1" class="form-label">Descripción</label>
                            <input  
                                    type="text" 
                                    class="form-control" 
                                    id="descripcion" name="descripcion" >
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputdescripcion1" class="form-label">Terminada</label>
                                <select class="form-select" name="terminada">
                                    <option value="N" selected>No</option>
                                    <option value="S">Si</option>
                                </select>                    
                            </div>
                            <div class="col">
                                <label for="exampleInputdescripcion1" class="form-label">Prioridad</label>
                                <input type="range" class="form-range" min="0" max="5" id="prioridad" name="prioridad">
                            </div>
                        </div>
                        <div class="row m-2">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                    </form>            

                </section>
                <section>
                    <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Terminada</th>
                        <th>Prioridad</th>
                        <th></th>
                    </tr>
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas']->value, 'tarea');
$_smarty_tpl->tpl_vars['tarea']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
$_smarty_tpl->tpl_vars['tarea']->do_else = false;
?>
                        <tr>
                            <td> <?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['tarea']->value->descripcion;?>
 </td>
                            <td> <?php ob_start();
echo $_smarty_tpl->tpl_vars['tarea']->value->terminada;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 'N') {?>
                                        No
                                    <?php } else { ?>
                                        Si
                                <?php }?>
                            </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['tarea']->value->prioridad;?>
 </td>
                            <td><a href="editar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
" type="submit" class="btn btn-success">Editar</a>
                                <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
" type="submit" class="btn btn-danger">Borrar</a></td>
                        </tr>
                     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
                </section>
            </div>
        </body>
        </html><?php }
}
