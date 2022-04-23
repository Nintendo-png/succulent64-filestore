<?php
header("Content-Type: video/mp4");
    header('Content-Disposition: attachment; filename="wcobfdi.mp4"');
	$opts = array(
	'http'=> array(
    'method'=> "GET",
    'header'=>"Host: ndisk.cizgifilmlerizle.com
User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0
Accept: video/webm,video/ogg,video/*;q=0.9,application/ogg;q=0.7,audio/*;q=0.6,*/*;q=0.5
Accept-Language: en-US,en;q=0.5
Range: bytes=0-
Connection: keep-alive
Referer: https://www.wcostream.com/
Sec-Fetch-Dest: video
Sec-Fetch-Mode: no-cors
Sec-Fetch-Site: cross-site
Pragma: no-cache
Cache-Control: no-cache
TE: trailers"
	));
	$headers = stream_context_create($opts);
$file = file_get_contents("https://ndisk13.cizgifilmlerizle.com/getvid?evid=6ukbxr3NB69czXfUolhNBSNynDI262S323vCoX-CVnDerG53QXvIMJEZvzyBGI6A0jNufUnfA8A7p_VUKaswGmUPuhh0NoeVJXUfmh9Lu7UTU_BzCSWvznl9V9VjSGKhAe6evcj7htoWZnJfQNYLv8FTjLxf410ld7l-jUbI53n-X8PJZZP1Enc24FluAmgyhWvvFSrHM4Z-VQJF1aId6Bc1vDQ2bwdxT2zxNY9xpo6iEP-sWSYEaZ7tjCZNigjl4NZc2_on1GKhCGxGKE_QP6H74q_KWBO0tpFLDQDdH70QKcwuVJwBy_V9KrRRiKtKKvYgHGnzwZe6_s1eBHJuRruR1EhS69pJ3Noy_Aer7G_tGJ1myfEhCGs6CYNBAUO3", false, $headers);
echo $file;
?>