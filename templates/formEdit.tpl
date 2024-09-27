{include 'header.tpl'}
            

        <div class="container mt-2">
                <section>
                    <h4>Lista de tareas</h4>
                </section>
                <section>
                <form method="post" action="modificar">
                    <div class="mb-3">
                        <label for="exampleInputdescripcion1" class="form-label">Descripción</label>
                        <input  
                                value="{$tarea->descripcion}"
                                type="text" 
                                class="form-control" 
                                id="descripcion" name="descripcion" >
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputdescripcion1" class="form-label">Terminada</label>
                            <select class="form-select" name="terminada">
                                 {if {$tarea->terminada }== 'N' }
                                    
                                        <option value="N" selected>No</option>
                                        <option value="S">Si</option>
                                 
                                 {else}
                                    
                                        <option value="N">No</option>
                                        <option value="S" selected>Si</option>
                                 
                                {/if}
                                
                                
                            </select>                    
                        </div>
                        <div class="col">
                            <label for="exampleInputdescripcion1" class="form-label">Prioridad</label>
                            <input 
                                value={$tarea->prioridad}; 
                                type="range" 
                                class="form-range" 
                                min="0" 
                                max="5" id="prioridad" name="prioridad">

                        </div>
                        <input 
                                name="id"
                                value={$tarea->id}; 
                                type="hidden" >
                    </div>
                    <div class="row m-2">
                        <button type="submit" class="btn btn-primary">Modificar</button>
                    </div>
                </form>            
            </div>
        </body>
    </html>