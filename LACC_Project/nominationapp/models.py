from django.db import models
from django.contrib.auth.models import User


# Create your models here.
class User(models.Model):
    username = models.TextField()
    password = models.TextField()
    accountType = models.IntegerField()

class Nomination(models.Model):
    studentFirstName = models.TextField()
    studentLastName = models.TextField()
    GPA = models.DecimalField(max_digits=3,decimal_places=2)
    SATScore = models.IntegerField()
    isArtistNomination = models.BooleanField()
    isAcademicNomination = models.BooleanField()
