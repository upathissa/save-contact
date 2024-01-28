function downloadVCardFromAmilaUpathissaSaveContact(){
    let data = amila_save_contact_vcard;
    

    let phones_text = ''
    let emails_text = ''
    let websites_text = ''
    let addresses_text = ''
    let vcard = '';
    let profile_image = ''
    let profile_image_text = ''

    let phones_vcard = data.phones;
    let emails_vcard = data.emails;
    let websites_vcard = data.websites;
    let addresses_vcard = data.addresses;
    let profile_pic_url = data.profile_url;
    console.log(data)

    // var imgElement = document.getElementById('amilaupathissa-sc-provile-image');

    // // Ensure the image is loaded before conversion
    // if (imgElement.complete) {
    //     let jpegImage = convertToJPEG(imgElement, 1); // 1 is the quality level (range 0 to 1)
    //     // console.log(jpegImage); // Outputs the Base64-encoded JPEG image
    //     profile_image = jpegImage.split(',')[1];
    // } else {
    //     imgElement.onload = function() {
    //         let jpegImage = convertToJPEG(imgElement, 1);

    //         profile_image = jpegImage.split(',')[1];
    //     };
    // }
    // console.log(profile_image)
    // profile_image_text = 'PHOTO;TYPE=JPEG;ENCODING=b:'+profile_image+'\n'
    let profile_image_format = getImageFormatFromUrl(profile_pic_url);
    if(profile_image_format != 'Unknown'){
        profile_image_text = 'PHOTO;VALUE=URI;TYPE='+profile_image_format+':'+profile_pic_url+'\n'
    }



    // phones text generate 
    if(Array.isArray(phones_vcard)){
        phones_vcard.forEach(phone => {
            // console.log(phone)
            phones_text += 'TEL;TYPE=CELL:'+phone.phone_number+'\n'
        });

    }


    // emails text generate 
    if(Array.isArray(emails_vcard)){
        emails_vcard.forEach(email => {
            // console.log(email)
            emails_text += 'EMAIL;TYPE=INTERNET:'+email+'\n'
        });

    }

    // websites text generate 
    if(Array.isArray(websites_vcard)){
        websites_vcard.forEach(website => {
            // console.log(email)
            websites_text += 'URL:'+website+'\n'
        });

    }

    // adresses text generate 
    if(Array.isArray(addresses_vcard)){
        addresses_vcard.forEach(address => {
            // console.log(email)
            // addresses_text += 'ADR;CHARSET=UTF-8;TYPE=HOME:;;Molpe Rd\, Katubedda;Moratuwa;;10400;:'+address+'\n'
            addresses_text = ''
        });

    }
    
    // profile pic text generate 
    // if(Array.isArray(prifile_pic)){
    //     profile_image_text = 'PHOTO;TYPE=JPEG;ENCODING=b:'+'\n'
    //     }
    // console.log(phones_text)
    let full_name = data.first_name+' '+data.last_name;
    let full_name_text = 'FN;CHARSET=UTF-8:'+full_name+'\n';
    let name_text = 'N;CHARSET=UTF-8:'+data.last_name+';'+data.first_name+';;;\n';
    let company_text = data.company ? 'ORG:' + data.company + '\n' : '';
    let job_title_text = data.company ? 'TITLE:'+ data.job_title + '\n' : '';

    vcard += 'BEGIN:VCARD\n'
    vcard += 'VERSION:3.0\n'
    vcard += full_name_text
    vcard += name_text
    vcard += phones_text
    vcard += emails_text
    vcard += websites_text
    vcard += job_title_text
    vcard += company_text
    // vcard += addresses_text
    vcard += profile_image_text

    vcard += 'END:VCARD'

    console.log(vcard)

    // Create a Blob with the vCard data
    var blob = new Blob([vcard], { type: 'text/vcard;charset=utf-8;' });

    // Create a link element, set its href to the Blob and trigger the download
    var link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.style.display = "none";
    link.download = full_name.replace(/ /g, "_")+'.vcf';

    // Append to the document and trigger the download
    document.body.appendChild(link);
    link.click();

    // Clean up
    document.body.removeChild(link);
    // document.getElementById('base64Image').src = jpegImage;
}

function convertToJPEG(imgElement, quality) {
    var canvas = document.createElement('canvas');
    canvas.width = imgElement.width;
    canvas.height = imgElement.height;

    var ctx = canvas.getContext('2d');
    ctx.drawImage(imgElement, 0, 0, canvas.width, canvas.height);

    var jpegDataUrl = canvas.toDataURL('image/jpeg', quality);

    return jpegDataUrl;
}

// get the image format form file extension
function getImageFormatFromUrl(url) {
    var extension = url.split('.').pop().toLowerCase();
    var format = "";

    switch(extension) {
        case 'jpg':
        case 'jpeg':
            format = 'JPEG';
            break;
        case 'png':
            format = 'PNG';
            break;
        case 'gif':
            format = 'GIF';
            break;
        case 'bmp':
            format = 'BMP';
            break;
        case 'tiff':
            format = 'TIFF';
            break;
        // Add more cases as needed
        default:
            format = 'Unknown';
    }

    // console.log('Image format:', format);
    return format;
}

