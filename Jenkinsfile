pipeline {
    agent {
        label 'jenkins-slave' 
    }
    environment{
        IMAGE_NAME = "apache-sql"
      }
    stages {
        stage('Build') {
            steps {
              script{
                  echo "Building Docker Image"
                  sh "sudo docker-compose build"
                }
            }
        }
        stage('Deploy') {
            steps {
              script{
                  echo "Docker Image deployed successfully"
                  sh "sudo docker-compose up -d"
                }
            }
        }
    }
}

