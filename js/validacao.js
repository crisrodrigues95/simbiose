//SCRIPT NECESSÁRIO PARA FAZER A FUNÇÃO DE VALIDAÇÃO DE QUAL FOI AS RESPOSTAS DE Q1,Q4,Q7,Q10,Q15,Q18//
    
    function validaQ1(resposta){
      if(resposta == 0){          
          document.querySelector("#q2Radio0").checked = true;
          document.querySelector("#q3Radio0").checked = true;
          document.querySelector('.q2').classList.add("d-none")
          document.querySelector('.q3').classList.add("d-none")
        }else{
          document.querySelector("#q2Radio0").checked = false;
          document.querySelector("#q3Radio0").checked = false;
          document.querySelector('.q2').classList.remove("d-none")
          document.querySelector('.q3').classList.remove("d-none")
        }
    }

    function validaQ4(resposta){
      if(resposta == 0){          
          document.querySelector("#q5Radio0").checked = true;
          document.querySelector("#q6Radio0").checked = true;
          document.querySelector('.q5').classList.add("d-none")
          document.querySelector('.q6').classList.add("d-none")
        }else{
          document.querySelector("#q5Radio0").checked = false;
          document.querySelector("#q6Radio0").checked = false;
          document.querySelector('.q5').classList.remove("d-none")
          document.querySelector('.q6').classList.remove("d-none")
        }
    }

    function validaQ7(resposta){
        if(resposta == 0){          
            document.querySelector("#q8Radio0").checked = true;
            document.querySelector("#q9Radio0").checked = true;
            document.querySelector('.q8').classList.add("d-none")
            document.querySelector('.q9').classList.add("d-none")
          }else{
            document.querySelector("#q8Radio0").checked = false;
            document.querySelector("#q9Radio0").checked = false;
            document.querySelector('.q8').classList.remove("d-none")
            document.querySelector('.q9').classList.remove("d-none")
          }
      }
    function validaQ10(resposta){
        if(resposta == 0){          
            document.querySelector("#q11Radio0").checked = true;
            document.querySelector("#q12Radio0").checked = true;
            document.querySelector('.q11').classList.add("d-none")
            document.querySelector('.q12').classList.add("d-none")
          }else{
            document.querySelector("#q11Radio0").checked = false;
            document.querySelector("#q12Radio0").checked = false;
            document.querySelector('.q11').classList.remove("d-none")
            document.querySelector('.q12').classList.remove("d-none")
          }
      }
      function validaQ15(resposta){
        if(resposta == 0){          
            document.querySelector("#q16Radio0").checked = true;
            document.querySelector("#q17Radio0").checked = true;
            document.querySelector('.q16').classList.add("d-none")
            document.querySelector('.q17').classList.add("d-none")
          }else{
            document.querySelector("#q16Radio0").checked = false;
            document.querySelector("#q17Radio0").checked = false;
            document.querySelector('.q16').classList.remove("d-none")
            document.querySelector('.q17').classList.remove("d-none")
          }
      }

      function validaQ18(resposta){
        if(resposta == 0){          
            document.querySelector("#q19Radio0").checked = true;
            document.querySelector("#q20Radio0").checked = true;
            document.querySelector('.q19').classList.add("d-none")
            document.querySelector('.q20').classList.add("d-none")
          }else{
            document.querySelector("#q19Radio0").checked = false;
            document.querySelector("#q20Radio0").checked = false;
            document.querySelector('.q19').classList.remove("d-none")
            document.querySelector('.q20').classList.remove("d-none")
          }
      }
