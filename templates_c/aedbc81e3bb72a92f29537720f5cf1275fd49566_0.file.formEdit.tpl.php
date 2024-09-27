<?php
/* Smarty version 4.3.4, created on 2024-09-27 23:00:53
  from 'C:\xampp\htdocs\web2\todo-list\templates\formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f71d053a38c3_96086152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aedbc81e3bb72a92f29537720f5cf1275fd49566' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\todo-list\\templates\\formEdit.tpl',
      1 => 1727470832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_66f71d053a38c3_96086152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            

        <div class="container mt-2">
                <section>
                    <h4>Lista de tareas</h4>
                </section>
                <section>
                <form method="post" action="modificar">
                    <div class="mb-3">
                        <label for="exampleInputdescripcion1" class="form-label">Descripción</label>
                        <input  
                                value="<?php echo $_smarty_tpl->tpl_vars['tarea']->value->descripcion;?>
"
                                type="text" 
                                class="form-control" 
                                id="descripcion" name="descripcion" >
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputdescripcion1" class="form-label">Terminada</label>
                            <select class="form-select" name="terminada">
                                 <?php ob_start();
echo $_smarty_tpl->tpl_vars['tarea']->value->terminada;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 'N') {?>
                                    
                                        <option value="N" selected>No</option>
                                        <option value="S">Si</option>
                                 
                                 <?php } else { ?>
                                    
                                        <option value="N">No</option>
                                        <option value="S" selected>Si</option>
                                 
                                <?php }?>
                                
                                
                            </select>                    
                        </div>
                        <div class="col">
                            <label for="exampleInputdescripcion1" class="form-label">Prioridad</label>
                            <input 
                                value=<?php echo $_smarty_tpl->tpl_vars['tarea']->value->prioridad;?>
; 
                                type="range" 
                                class="form-range" 
                                min="0" 
                                max="5" id="prioridad" name="prioridad">

                        </div>
                        <input 
                                name="id"
                                value=<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
; 
                                type="hidden" >
                    </div>
                    <div class="row m-2">
                        <button type="submit" class="btn btn-primary">Modificar</button>
                    </div>
                </form>            
            </div>
        </body>
    </html><?php }
}
