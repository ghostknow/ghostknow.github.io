<html>

<body>

  
<script>
let reqBody99 = {
 channel_no: '_9',
 vlink: '_9',
 
 device: 'aos_mobile',
 method: 'streamingGenerator2',
 quality: 'h',
 uuid: '',
 is_premium: '0',
 network: 'wifi',
 platform: '1',
 deviceToken: '',
 appVersion: '6.3.4',
 market: 'G',
 lang: 'zh_TW',
 version: '6.3.4',
 osVersion: '23',
 channel_id: '106',
 deviceModel: 'AndroidTV',
 type: 'live',
};

fetch('https://mobileapp.i-cable.com/iCableMobile/API/api.php', {
	mode: 'no-cors',
  method: 'POST',
  headers: new Headers({
    'User-Agent': 'Dalvik/2.1.0 (Linux; U; Android 6.0.1; AndroidTV Build/35.0.A.1.282)'
  }),
  body: JSON.stringify(reqBody99)
})
.then(response => response.json())
.catch(error => console.error('Error:', error))
.then(response => console.log('Success:', response));
</script>
</body>


</html>