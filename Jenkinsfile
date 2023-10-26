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
                  sh "Building Docker Image"
                  sh "docker-compose build"
                }
            }
        }
        stage('Deploy') {
            steps {
              script{
                  sh "docker-compose up -d"
                }
            }
        }
    }
}

