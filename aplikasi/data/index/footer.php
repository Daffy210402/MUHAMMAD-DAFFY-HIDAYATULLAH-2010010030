<!-- SISTEM 5 -->
<?php 
$petik = "'";
$isi_index .= '
								<td align="center">
									<a href="index.php?page=<?=$folder;?>&form=Ubah&id=<?=$id;?>" class="btn btn-sm btn-success has-ripple">
									<i class="fas fa-user-edit"></i>
									</a>
									<a href="index.php?page=<?=$folder;?>&form=Hapus&id=<?=$id;?>" class="btn btn-sm btn-danger has-ripple" onclick="return confirm('.$petik.'Yakin ingin menghapus data?'.$petik.')">
									<i class="fas fa-trash-alt"></i>
									</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
        <!-- Zero config table end -->
</div>

';
?>