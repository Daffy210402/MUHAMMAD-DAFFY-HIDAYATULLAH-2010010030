<!-- SISTEM 3 --> 
<?php 
$petik = "'";
$isi_index .= '
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
							$sql = mysqli_query($koneksi,"SELECT * FROM '.$nama_tabel_sistem.'';
?>