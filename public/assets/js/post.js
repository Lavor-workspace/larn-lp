async function newsletterfunct(token, footer = null) {
    if (footer == 'footer') {
        email = document.getElementById('newsletter-footer').value
    } else {
        email = document.getElementById('newsletter').value
    }

    response = await fetch('/newsletter', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        'email': email,
        '_token': token,
        'locale': document.documentElement.lang,
    })
    });

    const data = await response.text();

    if (data == 'ok') {
        switch (document.documentElement.lang) {
            case 'es':
                new AWN().success('Newsletter registrada correctamente', {labels: {success: 'Éxito'}})
                break;
            case 'en':
                new AWN().success('Newsletter registered correctly')
                break;
            case 'it':
                new AWN().success('Notiziario registrata correttamente', {labels: {success: 'Successo'}})
                break;

            default:
                new AWN().success('Newsletter registered correctly')
                break;
        }
    }else if(data == 'deleted'){
        switch (document.documentElement.lang) {
            case 'es':
                new AWN().success('Newsletter borrado correctamente', {labels: {success: 'Éxito'}})
                break;
            case 'en':
                new AWN().success('Newsletter deleted correctly')
                break;
            case 'it':
                new AWN().success('Notiziario cancellato correttamente', {labels: {success: 'Successo'}})
                break;

            default:
                new AWN().success('Newsletter deleted correctly')
                break;
        }
    }else{
        console.log(data)
    }
}

async function contactpush(data) {
    if (data == 'success') {
        switch (document.documentElement.lang) {
            case 'es':
                new AWN().success('Consulta registrada correctamente', {labels: {success: 'Éxito'}})
                break;
            case 'en':
                new AWN().success('Inquiry registered correctly')
                break;
            case 'it':
                new AWN().success('Query registrata correttamente', {labels: {success: 'Successo'}})
                break;

            default:
                new AWN().success('Inquiry registered correctly')
                break;
        }
    }else{
        switch (document.documentElement.lang) {
            case 'es':
                new AWN().warning(data, {labels: {warning: 'Error'}})
                break;
            case 'en':
                new AWN().warning(data)
                break;
            case 'it':
                new AWN().warning(data, {labels: {warning: 'Avvertimento'}})
                break;

            default:
                new AWN().warning(data)
                break;
        }
    }
}
