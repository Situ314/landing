<body>
    <center><h2>{{$recolector->Nombre}} - {{$landing->Titulo}}</h2></center>
    <p style="float: left;">Rango de fechas: {{$d}} - {{$h}}</p>
    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Fecha/Hora</th>
                <th>Región</th>
                @foreach($campos as $campo)
                <th>{{$campo->NombreCampo}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <?php $cont=0;?>
            @forelse($visitantes as $visitante)  
            <tr>             
                <?php $cont++;?>
                <td><?php echo $cont;?></td>
                <td>{{$visitante->FechaHora}}</td> 
                <td>{{$visitante->Region}}</td>
                @if($visitante->Campo1 != '' or $visitante->Campo1 != NULL)
                    <?php 
                        $a = explode('|', $visitante->Campo1);
                        if(count($a)>1) {
                            $cod_combo = $a[0];
                            $valor = $a[1];
                            foreach($detalles_combos as $detalle_combo){
                                if($detalle_combo->CodCombo == $cod_combo && $detalle_combo->id == $valor){
                                    echo "<td>$detalle_combo->Nombre</td>";
                                }
                            }
                        } else {
                            $mostrar = $a[0];
                            echo "<td>$mostrar</td>";
                        }
                    ?>                                   
                @endif
                @if($visitante->Campo2 != '' or $visitante->Campo2 != NULL)
                    <?php 
                        $a = explode('|', $visitante->Campo2);
                        if(count($a)>1) {
                            $cod_combo = $a[0];
                            $valor = $a[1];
                            foreach($detalles_combos as $detalle_combo){
                                if($detalle_combo->CodCombo == $cod_combo && $detalle_combo->id == $valor){
                                    echo "<td>$detalle_combo->Nombre</td>";
                                }
                            }
                        } else {
                            $mostrar = $a[0];
                            echo "<td>$mostrar</td>";
                        }
                    ?>                                   
                @endif
                @if($visitante->Campo3 != '' or $visitante->Campo3 != NULL)
                    <?php 
                        $a = explode('|', $visitante->Campo3);
                        if(count($a)>1) {
                            $cod_combo = $a[0];
                            $valor = $a[1];
                            foreach($detalles_combos as $detalle_combo){
                                if($detalle_combo->CodCombo == $cod_combo && $detalle_combo->id == $valor){
                                    echo "<td>$detalle_combo->Nombre</td>";
                                }
                            }
                        } else {
                            $mostrar = $a[0];
                            echo "<td>$mostrar</td>";
                        }
                    ?>                                   
                @endif
                @if($visitante->Campo4 != '' or $visitante->Campo4 != NULL)
                    <?php 
                        $a = explode('|', $visitante->Campo4);
                        if(count($a)>1) {
                            $cod_combo = $a[0];
                            $valor = $a[1];
                            foreach($detalles_combos as $detalle_combo){
                                if($detalle_combo->CodCombo == $cod_combo && $detalle_combo->id == $valor){
                                    echo "<td>$detalle_combo->Nombre</td>";
                                }
                            }
                        } else {
                            $mostrar = $a[0];
                            echo "<td>$mostrar</td>";
                        }
                    ?>                                   
                @endif
                @if($visitante->Campo5 != '' or $visitante->Campo5 != NULL)
                    <?php 
                        $a = explode('|', $visitante->Campo5);
                        if(count($a)>1) {
                            $cod_combo = $a[0];
                            $valor = $a[1];
                            foreach($detalles_combos as $detalle_combo){
                                if($detalle_combo->CodCombo == $cod_combo && $detalle_combo->id == $valor){
                                    echo "<td>$detalle_combo->Nombre</td>";
                                }
                            }
                        } else {
                            $mostrar = $a[0];
                            echo "<td>$mostrar</td>";
                        }
                    ?>                                   
                @endif
                @if($visitante->Campo6 != '' or $visitante->Campo6 != NULL)
                    <?php 
                        $a = explode('|', $visitante->Campo6);
                        if(count($a)>1) {
                            $cod_combo = $a[0];
                            $valor = $a[1];
                            foreach($detalles_combos as $detalle_combo){
                                if($detalle_combo->CodCombo == $cod_combo && $detalle_combo->id == $valor){
                                    echo "<td>$detalle_combo->Nombre</td>";
                                }
                            }
                        } else {
                            $mostrar = $a[0];
                            echo "<td>$mostrar</td>";
                        }
                    ?>                                   
                @endif
                @if($visitante->Campo7 != '' or $visitante->Campo7 != NULL)
                    <?php 
                        $a = explode('|', $visitante->Campo7);
                        if(count($a)>1) {
                            $cod_combo = $a[0];
                            $valor = $a[1];
                            foreach($detalles_combos as $detalle_combo){
                                if($detalle_combo->CodCombo == $cod_combo && $detalle_combo->id == $valor){
                                    echo "<td>$detalle_combo->Nombre</td>";
                                }
                            }
                        } else {
                            $mostrar = $a[0];
                            echo "<td>$mostrar</td>";
                        }
                    ?>                                   
                @endif
                @if($visitante->Campo8 != '' or $visitante->Campo8 != NULL)
                    <?php 
                        $a = explode('|', $visitante->Campo8);
                        if(count($a)>1) {
                            $cod_combo = $a[0];
                            $valor = $a[1];
                            foreach($detalles_combos as $detalle_combo){
                                if($detalle_combo->CodCombo == $cod_combo && $detalle_combo->id == $valor){
                                    echo "<td>$detalle_combo->Nombre</td>";
                                }
                            }
                        } else {
                            $mostrar = $a[0];
                            echo "<td>$mostrar</td>";
                        }
                    ?>                                   
                @endif
                @if($visitante->Campo9 != '' or $visitante->Campo9 != NULL)
                    <?php 
                        $a = explode('|', $visitante->Campo9);
                        if(count($a)>1) {
                            $cod_combo = $a[0];
                            $valor = $a[1];
                            foreach($detalles_combos as $detalle_combo){
                                if($detalle_combo->CodCombo == $cod_combo && $detalle_combo->id == $valor){
                                    echo "<td>$detalle_combo->Nombre</td>";
                                }
                            }
                        } else {
                            $mostrar = $a[0];
                            echo "<td>$mostrar</td>";
                        }
                    ?>                                   
                @endif
                @if($visitante->Campo10 != '' or $visitante->Campo10 != NULL)
                    <?php 
                        $a = explode('|', $visitante->Campo10);
                        if(count($a)>1) {
                            $cod_combo = $a[0];
                            $valor = $a[1];
                            foreach($detalles_combos as $detalle_combo){
                                if($detalle_combo->CodCombo == $cod_combo && $detalle_combo->id == $valor){
                                    echo "<td>$detalle_combo->Nombre</td>";
                                }
                            }
                        } else {
                            $mostrar = $a[0];
                            echo "<td>$mostrar</td>";
                        }
                    ?>                                   
                @endif
            </tr>
            @empty
                <div class="clearfix">&nbsp;</div>
                <p>No existen visitantes que se registraran a esta landing!</p>
            @endforelse
        </tbody>
    </table>
</body>
