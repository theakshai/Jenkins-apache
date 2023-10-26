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
                  sh "docker-compose build"
                }
            }
        }
        stage('Deploy') {
            steps {
              script{
                  echo "Docker Image deployed successfully"
                  sh "docker-compose up -d"
                }
            }
        }
    }
}

