<?php

$sitecode = "A110";			// �����ֹι�ȣ���� ������Ʈ �����ڵ� (�ѱ��ſ����������� �߱��� ����Ʈ �ڵ�)
$sitepasswd = "63149665";	// �����ֹι�ȣ���� ������Ʈ ��й�ȣ (�ѱ��ſ����������� �߱��� ����Ʈ ��й�ȣ)

$cb_encode_path = "/jellypod/KisinfoIPINInterop";		// ������/����
$strJumin = "";											// ����� �ֹι�ȣ
$strType = "JID";										// ���� �����Ͻø� �ȵ˴ϴ�.

$ReturnData = $cb_encode_path."^".$sitecode."^".$sitepasswd."^".$strType."^".$strJumin;
echo "ReturnData=($ReturnData)<BR><BR>";

// ����Ÿ�� �Ľ��մϴ�. (�����ڴ� ^ �Դϴ�.)
$arrData = split("\^", $ReturnData);
$iCount = count($arrData);

if ($iCount = 3){
	echo "0ó���Ͻ� = [$arrData[0]]<BR>";
	echo "1�����ڵ� = [$arrData[1]]<BR>";			// �����ڵ� : 1 �ܿ��� �����Դϴ�.
	echo "2�ߺ����� Ȯ�ΰ�(64bit) = [$arrData[2]]<BR>";
}

?>