function downloadVCardFromAmilaUpathissaSaveContact(){
    var phones_text = ''
    var emails_text = ''
    var websites_text = ''
    var addresses_text = ''
    var vcard = '';
    var data = amila_save_contact_vcard;

    var phones_vcard = data.phones;
    var emails_vcard = data.emails;
    var websites_vcard = data.websites;
    var addresses_vcard = data.addresses;
    console.log(data)
    

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
        addresses_vcard.forEach(website => {
            // console.log(email)
            addresses_text += 'URL:'+website+'\n'
        });

    }
    // console.log(phones_text)
    var full_name = data.first_name+''+data.last_name
    var full_name_text = 'FN;CHARSET=UTF-8:'+full_name+'\n'
    var name_text = 'N;CHARSET=UTF-8:'+data.last_name+';'+data.first_name+';;;\n'

    vcard += 'BEGIN:VCARD\n'
    vcard += 'VERSION:3.0\n'
    vcard += full_name_text
    vcard += name_text
    vcard += phones_text
    vcard += emails_text
    vcard += websites_text

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
}