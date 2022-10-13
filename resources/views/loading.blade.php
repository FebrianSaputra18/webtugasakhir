<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UD.MAHMUDA | Loading
  </title>

  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .container {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      max-width: 450px;
    }

    .text {
      font-family: 'Roboto Mono', monospace;
      font-size: 2rem;
    }

    .text_hide {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: white;
    }

    .text_cursor {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: transparent;
      border-left: 3px solid black;
    }

    .container-img {
      display: flex;
      justify-content: center;
      width: 100%;
    }
  </style>

</head>

<body>
  <div class="container-img">
    <img src="{{ asset('img/favicon.png')}}" alt="Image" height="105" width="100" class="pb-2 d-block">
  </div>
  <div class="container">
    <div class="text_hide"></div>
    <!----------------------------->
    <!--Change the number of words in the text and the animation will still work-->
    <div class="text">UD. MAHMUDA</div>
    <!-------------------------------------->
    <div class="text_cursor"></div>
  </div>
  <!-- axios -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script>
    function typing_animation() {
      let text_element = document.querySelector(".text");
      let text_array = text_element.innerHTML.split("");
      let text_array_slice = text_element.innerHTML.split(" ");
      let text_len = text_array.length;

      const word_len = text_array_slice.map((word) => {
        return word.length;
      })

      let timings = {
        easing: `steps(${Number(word_len[0] + 1)}, end)`,
        delay: 2000,
        duration: 2000,
        fill: 'forwards'
      }

      let cursor_timings = {
        duration: 700,
        iterations: Infinity,
        easing: 'cubic-bezier(0,.26,.44,.93)'
      }

      document.querySelector(".text_cursor").animate([{
          opacity: 0
        },
        {
          opacity: 0,
          offset: 0.7
        },
        {
          opacity: 1
        }
      ], cursor_timings);

      if (text_array_slice.length == 1) {
        timings.easing = `steps(${Number(word_len[0])}, end)`;

        let reveal_animation = document.querySelector(".text_hide").animate([{
            left: '0%'
          },
          {
            left: `${(100 / text_len) * (word_len[0])}%`
          }
        ], timings);

        document.querySelector(".text_cursor").animate([{
            left: '0%'
          },
          {
            left: `${(100 / text_len) * (word_len[0])}%`
          }
        ], timings);

        reveal_animation.onfinish = () => {
          setTimeout(() => {
            document.querySelector('.text_hide').animate([{
              left: '0%'
            }], {
              duration: 2000,
              easing: 'cubic-bezier(.73,0,.38,.88)'
            });
            document.querySelector('.text_cursor').animate([{
              left: '0%'
            }], {
              duration: 2000,
              easing: 'cubic-bezier(.73,0,.38,.88)'
            });
            typing_animation();
          }, 1000);
        }
      } else {
        document.querySelector(".text_hide").animate([{
            left: '0%'
          },
          {
            left: `${(100 / text_len) * (word_len[0] + 1)}%`
          }
        ], timings);

        document.querySelector(".text_cursor").animate([{
            left: '0%'
          },
          {
            left: `${(100 / text_len) * (word_len[0] + 1)}%`
          }
        ], timings);
      }


      for (let i = 1; i < text_array_slice.length; i++) {
        const single_word_len = word_len[i];

        if (i == 1) {
          var left_instance = (100 / text_len) * (word_len[i - 1] + 1);
        }

        let timings_2 = {
          easing: `steps(${Number(single_word_len + 1)}, end)`,
          delay: (2 * (i + 1) + (2 * i)) * (1000),
          // delay: ((i*2)-1)*1000,
          duration: 1000,
          fill: 'forwards'
        }

        if (i == (text_array_slice.length - 1)) {
          timings_2.easing = `steps(${Number(single_word_len)}, end)`;
          let reveal_animation = document.querySelector(".text_hide").animate([{
              left: `${left_instance}%`
            },
            {
              left: `${left_instance + ((100 / text_len) * (word_len[i]))}%`
            }
          ], timings_2);

          document.querySelector(".text_cursor").animate([{
              left: `${left_instance}%`
            },
            {
              left: `${left_instance + ((100 / text_len) * (word_len[i]))}%`
            }
          ], timings_2);

          reveal_animation.onfinish = () => {
            setTimeout(() => {
              document.querySelector('.text_hide').animate([{
                left: '0%'
              }], {
                duration: 2000,
                easing: 'cubic-bezier(.73,0,.38,.88)'
              });
              document.querySelector('.text_cursor').animate([{
                left: '0%'
              }], {
                duration: 2000,
                easing: 'cubic-bezier(.73,0,.38,.88)'
              });
              typing_animation();
            }, 1000);
          }
        } else {
          document.querySelector(".text_hide").animate([{
              left: `${left_instance}%`
            },
            {
              left: `${left_instance + ((100 / text_len) * (word_len[i] + 1))}%`
            }
          ], timings_2);

          document.querySelector(".text_cursor").animate([{
              left: `${left_instance}%`
            },
            {
              left: `${left_instance + ((100 / text_len) * (word_len[i] + 1))}%`
            }
          ], timings_2);
        }

        left_instance = left_instance + ((100 / text_len) * (word_len[i] + 1));
      }
    }
    typing_animation();

    $(window).ready(() => {
      axios.get('current-user-role')
        .then(({
          data
        }) => {
          switch (Number(data.data)) {
            case 1:
              window.location.href = '/admin-dashboard'
              break;
            case 2:
              window.location.href = '/sales-dashboard'
              break;
            case 3:
              window.location.href = '/supplier-dashboard'
              break;
            default:
              window.location.href = '/login'
              break;
          }
        }).catch((err) => {
          console.error(err)
        });
    });
  </script>
</body>

</html>