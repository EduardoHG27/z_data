
var app = new Vue({
  el: '#app',
  data: {
    scanner: null,
    activeCameraId: null,
    cameras: [],
    scans: []
  },
  mounted: function () {
    var self = this;
    self.scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5 });
    self.scanner.addListener('scan', function (content, image) {
      self.scans.unshift({ date: +(Date.now()), content: content });
      
      $.ajax({
       url:'https://ecommerce343.com/public/student/student_log',
      
      // url:'http://localhost:8080/gym_code/public/student/student_log',
        method: "post",
        data: {
          id: content
      },
        success: function(resp) {
          var result = $.parseJSON(resp);
          console.log(result.company);
         if (result.resp=='2')
          {
            Swal.fire({
              position: 'center',
              icon: 'warning',
              title: result.company,  
              html:'<h3>Atencion!<h3><br> El Usuario '+result.name + ',' + result.msj,
              showConfirmButton: false,
              timer: 4500
            })
          }
          else if (result.resp=='1')
          {
           
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: result.company,  
              html:'<h3>Bienvenido!<h3><br>'+result.name + ' -> ' + result.msj,
              showConfirmButton: false,
              timer: 3500
            })
          }else if (result.resp=='3')
          {
           
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: result.company,  
              html:'<h3>Registro Staff<h3><br>'+result.name + ' -> ' + result.msj,
              showConfirmButton: false,
              timer: 3500
            })
          }else if (result.resp=='4')
          {
           
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: result.company, 
              html:'<h3>Registro Staff<h3><br>'+result.name + ' -> ' + result.msj,
              showConfirmButton: false,
              timer: 3500
            })
          }else if (result.resp=='5')
          {
          

            Swal.fire({
              position: 'center',
              icon: 'warning',
              title: result.company, 
              html:'<h3>Registro Staff<h3><br>'+result.name + ' -> ' + result.msj,
              showConfirmButton: false,
              timer: 3500
            })
          }else if (result.resp=='6')
          {

            Swal.fire({
              position: 'center',
              icon: 'warning',
              title: result.company, 
              html:'<h3>Registro Staff<h3><br>'+result.name + ' -> ' + result.msj,
              showConfirmButton: false,
              timer: 3500
            })
           
          }else
          {

            
            Swal.fire({
              position: 'center',
              icon: 'error',
              title: result.company, 
               html:'<h3>'+result.msj+'<h3>',
              text: result.msj,
              showConfirmButton: false,
              timer: 3500
            })
          }
          
        }
    });
      
    });
    Instascan.Camera.getCameras().then(function (cameras) {
      self.cameras = cameras;
      if (cameras.length > 0) {
        self.activeCameraId = cameras[0].id;
        self.scanner.start(cameras[0]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function (e) {
      console.error(e);
    });
  },
  methods: {
    formatName: function (name) {
      return name || '(unknown)';
    },
    selectCamera: function (camera) {
      this.activeCameraId = camera.id;
      this.scanner.start(camera);
    }
  }
});
