<?php
    use App\Core\Controller;

    class FeedbackController extends Controller{
        private $feedbackModel;
        function __construct(){
            $this->feedbacksModel = $this->model("FeedbacksModel");
        }

        function Index(){
            $data["feedback"] = $this->feedbacksModel->showAll();
            $this->view("feedbacks/index", $data);
        }

        function delete(){
            if(isset($_GET)){
                $result =  $this->feedbacksModel->deleteCmt($_GET);
                echo $result;
                return;
            }
            else echo "Can not delete this comment!"; 
        }
    }
?>