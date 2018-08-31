<head>
<style>
body{
    font-family: "Arial Narrow", Arial, sans-serif;
    font-size: 11px;
}    
    
table{
    width: 100%;
}
thead{
    color: #fff;
    background-color: #464141;
    border: 1px;
}

tbody tr:nth-child(even) {
    background-color: #AEAEAE;
}
 
tbody tr:nth-child(odd) {
    background-color: #FCF0DF ;
}

img{
    width: 100%;
    /*margin: -45px;*/
    margin: 10px;
}
.left{
    float: left;
    position: absolute;
}
.right{
    float: right;
    position: absolute;
}
footer{
    display: inline-block;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 40px;
    margin-bottom: -45px;
}
p{
    float: right;
    position: absolute;
    padding-top: -25px;
}
</style>
</head>
<body>
    @if($estado == '0')
        <center><h2>LEADS</h2></center>
        <table>
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre de recolector</th>
                    <th>Titulo landing</th>
                    <th>Visitas totales</th>
                    <th>Visitas a formulario</th>
                </tr>
            </thead>
            <tbody>
                <?php $cont=0;?>
                @forelse($recolector as $rec)  
                    @foreach($landing as $land)
                        @if($rec->id == $land->CodRecolector)
                        <tr>
                            <?php $cont++;?>
                            <td><?php echo $cont;?></td>
                            <td>{{$rec->Nombre}}</td>
                            <td>{{$land->Titulo}}</td>
                            <td>{{$land->Cont_Ingreso}}</td>
                            <td>{{$land->Cont_Boton}}</td>
                        </tr>
                        @endif                
                    @endforeach
                @empty
                    <div class="clearfix">&nbsp;</div>
                    <p>No existen recolectores registrados!</p>
                @endforelse
            </tbody>
        </table>
    @else
        <center><h2>LEADS - {{$recolector->Nombre}}</h2></center>
        <table>
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Titulo landing</th>
                    <th>Visitas totales</th>
                    <th>Visitas a formulario</th>
                </tr>
            </thead>
            <tbody>
                <?php $cont=0;?>
                @forelse($landing as $land)  
                    @if($recolector->id == $land->CodRecolector)
                    <tr>
                        <?php $cont++;?>
                        <td><?php echo $cont;?></td>
                        <td>{{$land->Titulo}}</td>
                        <td>{{$land->Cont_Ingreso}}</td>
                        <td>{{$land->Cont_Boton}}</td>
                    </tr>
                    @endif  
                @empty
                    <div class="clearfix">&nbsp;</div>
                    <p>No existen landings para este recolector!</p>
                @endforelse
            </tbody>
        </table>
    @endif
    <footer>
        <label class="left">Fecha y Hora: {!!$hoy!!}</label>
    </footer>
</body>
