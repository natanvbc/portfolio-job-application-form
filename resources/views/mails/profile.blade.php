<html>
    <body style="width: 100%; padding: 40px 0px; display:flex; background-color: #f8f9fa; justify-content: center; align-items: center;">
        <div style="width: 300px; background-color: white; border-radius: 5px; padding: 10px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <span style="display: block; padding-bottom: 5px;"><b>Dados Do Candidato:</b></span>
            <small style="display: block;"><b>Nome:</b> {{ $data['name'] }}</small>
            <small style="display: block;"><b>Email:</b> {{ $data['email'] }}</small>
            <small style="display: block;"><b>Telefone:</b> {{ $data['phone'] }}</small>
            <small style="display: block;"><b>Educação: </b>

                <?php switch($data['education']): case '01': ?>Fundamental - Incompleto<?php break; ?>
                    <?php case '02': ?>Fundamental - Completo<?php break; ?>
                    <?php case '03': ?>Médio - Incompleto<?php break; ?>
                    <?php case '04': ?>Médio - Completo<?php break; ?>
                    <?php case '05': ?>Superior - Incompleto<?php break; ?>
                    <?php case '06': ?>Superior - Completo<?php break; ?>
                    <?php case '07': ?>Pós-graduação (Lato senso) - Incompleto<?php break; ?>
                    <?php case '08': ?>Pós-graduação (Lato senso) - Completo<?php break; ?>
                    <?php case '09': ?>Pós-graduação (Stricto sensu, nível mestrado) - Incompleto<?php break; ?>
                    <?php case '10': ?>Pós-graduação (Stricto sensu, nível mestrado) - Completo<?php break; ?>
                    <?php case '11': ?>Pós-graduação (Stricto sensu, nível doutor) - Incompleto<?php break; ?>
                    <?php case '12': ?>Pós-graduação (Stricto sensu, nível doutor) - Completo<?php break; ?>
                <?php endswitch; ?>
        
            </small>

            <?php if($data['observation'] && $data['observation'] != '') { ?>
                <small style="display: block;"><b>Observações:</b></small>
                <small style="display: block;">{{ $data['observation'] }}</small>
            <?php } ?>

            <small style="display: block; text-align: end; padding-top: 3px; color: #6c757d;"><b>Vaga:</b> {{ $data['role'] }}</small>
        </div>
    </body>
</html>