<?php 
$html .="
                                <table width='100%' align='right'>
                                
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>Barabai, ".tgl(date('Y-m-d'))."</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>Mengetahui,</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'>KETUA</th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'><img src='../modul/internal/barcode.jpg' height='80px'></th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'><b>Dra. Hj. Noor Asiah</b></th>
                                    </tr>
                                    <tr>
                                        <th width='60%'>&nbsp;</th>
                                        <th align='center'><b>NIP. 19700820 199703 2 002</b></th>
                                    </tr>
                                </table>  
</div>
</div>";

$dompdf->loadhtml($html);

$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream($title, array("Attachment" => 0));
 ?>