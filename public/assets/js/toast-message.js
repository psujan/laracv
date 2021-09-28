const toastHeadings = {
    'success':'Success !',
    'error' :'Error',
    'info':'Information',
    'warning':'Warning'
  };

  function toast(type, message){
      console.log(type,message);
    let header = toastHeadings[type] ?? 'Information';
    $.toast({
        heading:header,
        text: message,
        icon: type,
        loader: true,        // Change it to false to disable loader
        loaderBg: '#1F3BB3' , // To change the background
        position: 'top-right',
      })
  }

  function successMessage(message){
      toast('success',message);
  }

  function errorMessage(message){
      toast('error',message);
  }

  function infoMessage(message){
    toast('info',message)
  }

  function warningMessage(message){
      toast('warning',message)
  }
