from django.shortcuts import render
from django.http import HttpResponse
from django.views.generic.list import ListView

from nominationapp.models import Nomination

# Create your views here.
def index(request):
    #return HttpResponse("hello world.")
    return render(request, 'nominationapp/index.html')


class all_data(ListView):
    model = Nomination